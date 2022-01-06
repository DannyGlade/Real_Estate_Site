@push('title')
    Log In To DG-Estate
@endpush
@include('layouts.header')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Welcome back to DG-Estate</h1>
            <p class="col-lg-10 fs-4">
                This is just bunch of random text you don't need to read it. Stop it already I told you don't read it.
                Fine do whaterver you want read this too. It took me F***ing ** Months to make this Project.
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ url('/login') }}">

                @csrf
                <x-log-input type="email" name="email" label="Email address" placeholder="name@example.com" />
                <x-log-input type="password" name="password" label="Password" placeholder="Password" />

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
                <hr class="my-4">
                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                <small class="text-muted">Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a></small>
            </form>
        </div>
    </div>
</div>

@include('layouts.close')
