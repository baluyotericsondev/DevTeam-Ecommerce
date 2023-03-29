<!DOCTYPE html>
@include('layout.css')
@include('layout.navbar')
<section id="form">
    <!--form-->
    <div class="container">
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        @if (session()->has('error'))
            <div class="col-12">
                <div class="alert alert-danger" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                    {{ session()->get('error') }}
                </div>
            </div>
        @endif

        @if (session()->has('success'))
            < <div class="col-12">
                <div class="alert alert-success" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                    {{ session()->get('success') }}
                </div>
    </div>
    @endif
    <div div class="row">
        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form">
                <!--login form-->
                <h2>Login to your account</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="email" placeholder="Email " name="email" autocomplete="off" />
                    <input type="password" placeholder="Password" name="password" autocomplete="off" />
                    <span>
                        <input type="checkbox" class="checkbox">
                        Keep me signed in
                    </span>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
            <!--/login form-->
        </div>
        <div class="col-sm-1">
            <h2 class="or">OR</h2>
        </div>
        <div class="col-sm-4">
            <div class="signup-form">
                <!--sign up form-->
                <h2>New User Signup!</h2>
                <form action="{{ route('registration') }}" method="GET">
                    @csrf

                    <input type="text" placeholder="Name" name="name" {{ old('name') }} autocomplete="off" />
                    <input type="hidden" name="user_type" />

                    <input type="email" placeholder="Email Address" name="email" {{ old('email') }}
                        autocomplete="off" />

                    <input type="password" placeholder="Password" name="password" />

                    <input type="password" placeholder="Confirm Password" name="password_confirmation" />

                    <input type="number" placeholder="Phone Number" name="phone_number" {{ old('phone_number') }}
                        autocomplete="off" />

                    <input type="text" placeholder="Address" name="address" {{ old('address') }} autocomplete="off">
                    <button type="submit" class="btn btn-default ">Signup</button>
                </form>
            </div>
            <!--/sign up form-->
        </div>
    </div>
    </div>
</section>
<!--/form-->


@include('partials.footer')


@include('layout.script')
