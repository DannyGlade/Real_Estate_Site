<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Facilities;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\String\Slugger\SluggerInterface;

class AdminController extends Controller
{
    //auth starts

    //sending to Dashboard
    public function dashboard(Request $request)
    {
        $user = $request->session()->get('AdminUser');
        // $status = false;
        if ($user) {
            $status = true;
        }
        $title = $user['name'];
        $menu = 'dashboard';
        $data = compact('status', 'user', 'title', 'menu');
        // dd($data);
        return view('AdminPanel.dashboard')->with($data);
    }
    //sending to adminlogin page
    public function loginPage()
    {
        $title = "Log In";
        $status = false;
        $data = compact('status', 'title');
        return view('AdminPanel.AdminUser.AdminLogin')->with($data);
    }
    //logging In
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::select('*')->where('email', $request->email)->get();
        // $user = User::get()->where('email', $request->email);

        // dd($user);

        if ($user[0]->password == md5($request->password)) {

            if ($user[0]->type == "A" || $user[0]->type == "R") {

                $request->session()->put('AdminUser', $user[0]->toArray());
                return redirect(url(route('AdminHome')));
            } else {
                return redirect(route('userHome'));
            }
        } else {
            $request->validate([
                'password' => 'password'
            ]);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('AdminUser');
        // $request->session()->flush();
        return redirect(url(route('AdminLoginPage')));
    }

    //auth ends

    //category starts
    public function list_category(Request $request)
    {

        $title = "Category List";
        $menu = "category";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $cate = Category::all();
        $data = compact('status', 'user', 'title', 'menu', 'cate');

        return view('AdminPanel.category.list', $data);
    }

    public function add_category(Request $request)
    {
        $title = "Add Category";
        $menu = "category";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $data = compact('status', 'user', 'title', 'menu');

        return view('AdminPanel.category.form', $data);
    }

    public function category_added(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|unique:categories,name',
            'image' => 'required|mimes:png,jpg'
        ]);
        $cate = new Category;
        $cate->name = $request->name;
        $cate->slug_name = str_slug($request->name);
        $image = $request->file('image');
        $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
        $store = $image->storeAs('public/images', $iname);
        if ($store) {
            $cate->image = $iname;
        }
        $cate->save();

        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_category'));
        // dd($image);
    }

    public function del_category(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:categories,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        // dd($valid);
        if ($valid) {
            $cate = Category::findorfail($id);
            // dd($cate);
            $image = $cate->image;
            Storage::delete('public/images/' . $image);
            $cate->delete();
        }
        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');
        return redirect(route('list_category'));
    }

    public function edit_category(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:categories,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $cate = Category::findorfail($id);
        }

        $title = "Edit Category";
        $menu = "category";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $data = compact('status', 'user', 'title', 'menu', 'cate');
        return view('AdminPanel.category.form', $data);
    }

    public function category_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:categories,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'image' => 'mimes:png,jpg'
        ]);
        // dd($request);
        $cate = Category::findorfail($id);
        $cate->name = $request->name;
        $cate->slug_name = str_slug($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            Storage::delete('public/images/' . $cate->image);
            $store = $image->storeAs('public/images', $iname);
            if ($store) {
                $cate->image = $iname;
            }
        }
        $cate->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_category'));
    }
    //category ends

    //Cities Starts

    public function list_cities(Request $request)
    {
        $title = "Cities List";
        $menu = "cities";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $city = City::all();
        $data = compact('status', 'user', 'title', 'menu', 'city');

        return view('AdminPanel.cities.list', $data);
    }
    public function add_cities(Request $request)
    {
        $title = "Add Cities";
        $menu = "cities";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $data = compact('status', 'user', 'title', 'menu');

        return view('AdminPanel.cities.form', $data);
    }
    public function cities_added(Request $request)
    {
        $valid = $request->validate([
            'city' => 'required|unique:cities,city',
            'status' => 'boolean'
        ]);
        // dd($request);
        $city = new City;
        $city->city = $request->city;
        $city->slug_city = str_slug($request->city);
        if ($request->status == 1) {
            $city->status = $request->status;
        } else {
            $city->status = '0';
        }
        $city->save();
        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_cities'));
        // dd($image);
    }
    public function del_cities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:cities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        // dd($valid);
        if ($valid) {
            $city = City::findorfail($id);
            $city->delete();
        }
        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');
        return redirect(route('list_cities'));
    }
    public function edit_cities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:cities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $city = City::findorfail($id);
        }

        $title = "Edit Cities";
        $menu = "cities";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $data = compact('status', 'user', 'title', 'menu', 'city');
        return view('AdminPanel.cities.form', $data);
    }
    public function cities_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:cities,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'city' => 'required|unique:cities,city,' . $id,
            'status' => 'boolean'
        ]);
        // dd($request);
        $city = City::findorfail($id);
        $city->city = $request->city;
        $city->slug_city = str_slug($request->city);
        if ($request->status == 1) {
            $city->status = $request->status;
        } else {
            $city->status = '0';
        }
        $city->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_cities'));
    }
    //Cities Ends

    //Facilities starts
    public function list_facilities(Request $request)
    {
        $title = "Facilities List";
        $menu = "facilities";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $faci = Facilities::all();
        $data = compact('status', 'user', 'title', 'menu', 'faci');

        return view('AdminPanel.facilities.list', $data);
    }
    public function add_facilities(Request $request)
    {
        $title = "Add Facility";
        $menu = "facilities";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $data = compact('status', 'user', 'title', 'menu');

        return view('AdminPanel.facilities.form', $data);
    }
    public function facilities_added(Request $request)
    {
        $valid = $request->validate([
            'faci' => 'required|unique:facilities,faci',
        ]);
        // dd($request);
        $faci = new Facilities;
        $faci->faci = $request->faci;
        $faci->slug_faci = str_slug($request->faci);
        $faci->save();
        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_facilities'));
    }
    public function del_facilities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:facilities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        // dd($valid);
        if ($valid) {
            $faci = Facilities::findorfail($id);
            $faci->delete();
        }
        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');
        return redirect(route('list_facilities'));
    }
    public function edit_facilities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:facilities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $faci = Facilities::findorfail($id);
        }

        $title = "Edit Facility";
        $menu = "facilities";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $data = compact('status', 'user', 'title', 'menu', 'faci');
        return view('AdminPanel.facilities.form', $data);
    }
    public function facilities_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:facilities,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'faci' => 'required|unique:facilities,faci,' . $id,
        ]);
        // dd($request);
        $faci = Facilities::findorfail($id);
        $faci->faci = $request->faci;
        $faci->slug_faci = str_slug($request->faci);
        $faci->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_facilities'));
    }
    //Facilities ends

}
