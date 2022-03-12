<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\cms;
use App\Models\Facilities;
use App\Models\gallary;
use App\Models\Property;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function not_found()
    {
        $title = "Page Not Found";
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('errors.404', $data);
    }
    public function loginForm()
    {
        $title = "Log In";

        $data = compact('title');
        return view('User.UserLogIn', $data);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            $id = $user->id;
            $user = User::with('Data', 'Reviews')->findOrFail($id);
            $request->session()->put('user', $user->toArray());
            // return redirect(route('userHome'));
            return redirect()->intended();
        } else {
            $request->validate([
                'password' => 'password'
            ]);
        }
    }

    //sending to sign up form
    public function signupForm()
    {
        $title = "Sign In";

        $data = compact('title');
        return view('User.UserSignUp', $data);
    }

    //signing up
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'conf_password' => 'required|same:password'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user_data = new UserData;
        $user_data->id = $user->id;
        $user_data->save();


        return redirect(route('UserLoginForm'));
    }

    //managing login logout
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        // $request->session()->flush();

        // return redirect(url(route('userHome')));
        return redirect()->back();
    }

    //User Profile Page
    public function userprofile(Request $request)
    {
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $user = User::with('Data')->findOrFail($userId);
        $title = $user->name . " | Profile";
        $menu = "none";

        $data = compact('title', 'menu', 'user');
        return view('User.Profile', $data);
    }
    //edit profile Page
    public function edituserprofile(Request $request)
    {
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $user = User::with('Data')->findOrFail($userId);
        $title = $user->name . " | Edit Profile";
        $menu = "none";

        $data = compact('title', 'menu', 'user');
        return view('User.editProfile', $data);
    }
    public function editeduserprofile(Request $request)
    {
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $userId . ',id',
            'image' => 'mimes:png,jpg'
        ]);
        $user = User::with('Data')->findOrFail($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        $user_data = UserData::find($user->id);
        if ($user_data === null) {
            $user_data = new UserData;
            $user_data->id = $user->id;
            $user_data->save();
        }
        $user_data->about = $request->about;
        if ($request->hasFile('image')) {
            Storage::delete('public/userdata/' . $user_data->image);
            $image = $request->file('image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/userdata', $iname);
            if ($store) {
                $user_data->image = $iname;
            }
        }
        $user->save();
        $user_data->save();
        $request->session()->put('user', $user);

        return redirect(route('UserProfile'));
    }
    //delete profile image using AJAX
    public function del_profile_img(Request $request)
    {
        if ($request->ajax()) {
            $userId = $request->session()->get('user')->id;
            $user_data = UserData::find($userId);
            $res = Storage::delete('public/userdata/' . $user_data->image);
            if ($res) {
                $user_data->image = null;
                $user_data->save();
                $user = User::with('Data')->findOrFail($userId);
                $request->session()->put('user', $user->toArray());
                return true;
            } else {
                return false;
            }
        }
    }

    //Changing User's Password
    public function user_chng_password(Request $request)
    {
        // dd($request);
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $title = $user['name'] . " | Change Password";
        $menu = "none";

        $data = compact('title', 'menu', 'user');
        return view('User.chngPassword', $data);
    }
    public function user_save_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);
        $id = $request->session()->get('user')['id'];
        $user = User::findOrFail($id);

        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->forget('user');

        return redirect()->back();
    }

    //sending home
    public function userHome(Request $request)
    {
        $title = "Home";
        $menu = "home";
        $featuredPro = Property::with('Cate', 'City')->where('featured', true)->latest()->limit(4)->get();
        $newlyAdded = Property::with('Cate', 'City')->where('featured', false)->latest()->limit(6)->get();
        $showcate = Category::latest()->limit(6)->get();
        $catedata = Category::with('Pro')->latest()->limit(3)->get();

        $data = compact('title', 'menu', 'featuredPro', 'newlyAdded', 'showcate', 'catedata');
        return view('frontend.home', $data);
    }
    //Showing Properties
    public function show(Request $request)
    {
        $show = Property::with('Cate', 'City')
            ->latest()
            ->paginate(10);
        $title = 'Propeties';
        $menu = 'none';

        $data = compact('title', 'menu', 'show');
        if ($request->ajax()) {
            return view('frontend.showinitem', compact('show'));
        } else {
            return view('frontend.show', $data);
        }
    }
    public function show_category(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'cate' => 'exists:categories,slug_name'
        ])->validate();
        $cate_fltr = $request->route()->parameter('cate');
        $cate = Category::where('slug_name', '=', $cate_fltr)->first();
        $show = Property::with('Cate', 'City')
            ->where('category', '=', $cate->id)
            // ->where('featured', false)
            ->latest()
            // ->limit(6)
            ->paginate(10);
        // ->get();
        $title = $cate->name;
        $menu = 'category';

        $data = compact('title', 'menu', 'show', 'cate_fltr');
        return view('frontend.show', $data);
    }
    public function show_city(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'city' => 'exists:cities,slug_city'
        ])->validate();
        $city_fltr = $request->route()->parameter('city');
        $city = City::where('slug_city', '=', $city_fltr)->first();
        $show = Property::with('Cate', 'City')
            ->where('city', '=', $city->id)
            // ->where('featured', false)
            ->latest()
            // ->limit(6)
            ->paginate(10);
        // ->get();
        $title = $city->city;
        $menu = 'city';

        $data = compact('title', 'menu', 'show', 'city_fltr');
        return view('frontend.show', $data);
    }
    public function show_purpose(Request $request)
    {
        $purpose_fltr = $request->route()->parameter('purpose');
        $show = Property::with('Cate', 'City')
            ->where('purpose', '=', $purpose_fltr)
            // ->where('featured', false)
            ->latest()
            // ->limit(6)
            ->paginate(10);
        // ->get();
        $title = ucfirst($purpose_fltr);
        $menu = 'purpose';

        $data = compact('title', 'menu', 'show', 'purpose_fltr');
        return view('frontend.show', $data);
    }
    public function show_pro(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'pro' => 'exists:properties,title_slug'
        ])->validate();
        $pro = $request->route()->parameter('pro');
        $item = Property::with('Cate', 'City')
            ->where('title_slug', '=', $pro)
            ->first();
        $faci = [];
        $facis = json_decode($item->faci);
        if (!empty($facis)) {
            foreach ($facis as $key => $value) {
                $faci[$key] = Facilities::where('slug_faci', '=', $value)->first();
            }
        }
        $gals = gallary::with('Pro')->where('pro_id', '=', $item->id)->get();
        $userId = $request->session()->get('user')['id'] ?? null;
        $user_reviews = Reviews::where('u_id', $userId)->where('pro_id', $item->id)->latest()->get();
        $reviews = Reviews::with('Users')
            ->where('u_id', '!=', $userId)->where('pro_id', $item->id)
            ->latest()
            ->limit(10)
            ->get();
        // dd($reviews);
        $title = $item->title;
        $menu = 'none';

        $data = compact('title', 'menu', 'item', 'gals', 'faci', 'user_reviews', 'reviews');
        return view('frontend.property', $data);
    }
    //filter Property
    public function ajaxFilter(Request $request)
    {
        if ($request->ajax()) {
            // dd($request);
            $cate = $request->category;
            if ($cate == '*') {
                $cateS = ['category', '!=', null];
            } else {
                $cate = Category::where('slug_name', '=', $cate)->first();
                $cateS = ['category', '=', $cate->id];
            }
            $city = $request->city;
            if ($city == '*') {
                $cityS = ['city',  '!=', null];
            } else {
                $city = City::where('slug_city', '=', $city)->first();
                $cityS = ['city', '=', $city->id];
            }
            $purpose = $request->purpose;
            if ($purpose == '*') {
                $purposeS = ['purpose',  '!=', null];
            } else {
                $purposeS = ['purpose', '=', $purpose];
            }
            $search = stripslashes(strip_tags($request->search));
            $searchStr = ['title', 'LIKE', '%' . $search . '%'];
            $sort = $request->sort;
            switch ($sort) {
                case 'latest':
                    $sortW = 'created_at';
                    $sortS = 'desc';
                    break;
                case 'oldest':
                    $sortW = 'created_at';
                    $sortS = 'asc';
                    break;
                case 'phtl':
                    $sortW = 'price';
                    $sortS = 'desc';
                    break;
                case 'plth':
                    $sortW = 'price';
                    $sortS = 'asc';
                    break;
                case 'ahtl':
                    $sortW = 'area';
                    $sortS = 'desc';
                    break;
                case 'alth':
                    $sortW = 'area';
                    $sortS = 'asc';
                    break;
            }

            $show = Property::with('Cate', 'City')
                ->where([
                    $cateS,
                    $cityS,
                    $purposeS,
                    $searchStr,
                ])
                ->orderBy($sortW, $sortS)
                ->paginate(10);

            return view('frontend.showinitem', compact('show'));
        }
    }
    //search Property
    public function propSearch(Request $request)
    {
        $request->validate([
            'purpose' => 'required',
        ]);

        $SecStr = stripslashes(strip_tags($request->search));
        $searchStr = '%' . $SecStr . '%';
        $purpose = $request->purpose;
        if ($purpose == '*') {
            $purposeS = ['purpose', '!=', null];
        } else {
            $purposeS = ['purpose', '=', $purpose];
        }
        $show = Property::with('Cate', 'City')
            ->where([
                $purposeS,
                ['title', 'LIKE', $searchStr]
            ])
            ->latest()
            ->paginate(10);
        $title = 'Propeties';
        $menu = 'none';

        $data = compact('title', 'menu', 'show', 'SecStr', 'purpose');
        return view('frontend.show', $data);
    }
    //saving Property Ajax
    public function save_pro($pro, $id, Request $request)
    {
        if ($request->ajax()) {
            // dd($pro, $request);
            $res = true;
            $userId = $request->session()->get('user')['id'];
            $user_data = UserData::find($userId);
            if ($user_data === null) {
                $user_data = new UserData;
                $user_data->id = $userId;
                $user_data->save();
            }
            $saved = json_decode($user_data->saved, true);
            if ($saved == null) {
                $saved = array();
            }
            if (in_array($pro, $saved)) {
                unset($saved[$id]);
                $res = false;
            } else {
                $saved[$id] = $pro;
                $res = true;
            }
            $user = User::with('Data', 'Reviews')->findOrFail($userId);
            $request->session()->put('user', $user->toArray());
            $user_data->saved = json_encode($saved, true);
            $user_data->save();

            return $res;
        }
    }
    public function show_saved_pro(Request $request)
    {
        $userId = $request->session()->get('user')['id'];
        $user_data = UserData::find($userId);
        $saved = json_decode($user_data->saved, true);
        $ids = [];
        foreach ($saved as $key => $save) {
            array_push($ids, $key);
        }
        $show = Property::with('Cate', 'City')
            ->whereIn('id', $ids)
            ->paginate(10);
        // dd($show);
        $title = 'Saved Properies';
        $menu = 'none';

        $data = compact('title', 'menu', 'show');
        return view('User.savedPro', $data);
    }

    //adding property review using ajax
    public function add_review(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'review_text' => 'required'
            ]);
            $userId = $request->session()->get('user')['id'];
            $review = new Reviews;
            $review->u_id = $request->u_id;
            $review->pro_id = $request->pro_id;
            $review->review = $request->review_text;
            $review->save();
            $user = User::with('Data', 'Reviews')->findOrFail($userId);
            $request->session()->put('user', $user->toArray());

            $res = ['status' => true, 'review' => $review];
            return json_encode($res, true);
        }
    }
    //deleting review with ajax
    public function del_review($id, Request $request)
    {
        if ($request->ajax()) {
            $userId = $request->session()->get('user')['id'];
            $review = Reviews::FindOrFail($id);
            $review->delete();
            $user = User::with('Data', 'Reviews')->findOrFail($userId);
            $request->session()->put('user', $user->toArray());

            $res = ['status' => true];
            return json_encode($res, true);
        }
    }

    //showing about page
    public function show_about(Request $request)
    {
        $title = 'About';
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('frontend.about', $data);
    }
    public function show_faq(Request $request)
    {
        $title = 'FAQ';
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('frontend.faq', $data);
    }
    public function show_terms(Request $request)
    {
        $title = 'Terms';
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('frontend.terms', $data);
    }
}
