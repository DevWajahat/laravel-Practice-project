@include('includes.head')

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<section class="forget-password-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="{{ route('home') }}">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">Welcome Back</h2>
                    <form class="text-left clearfix" method="post" action="{{ route('password.email') }}">
                        @csrf
                        <p>Please enter the email address for your account. A verification code will be sent to you.
                            Once you have received the verification code, you will be able to choose a new password for
                            your account.</p>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                placeholder="Account email address">

                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-main text-center" value="Request password reset">
                        </div>
                    </form>
                    <p class="mt-20"><a href="">Back to log in</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('includes.scripts')
