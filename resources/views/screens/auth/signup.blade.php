@include('includes.head')
<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">Create Your Account</h2>
                    <form class="text-left clearfix" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" value="{{ old('password') }}" class="form-control @error('passoword') is-invalid @enderror" name="password" placeholder="Password">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('phone_no') }}" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" placeholder="Phone No">
                            @error('phone_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-main text-center">Sign UP</button>
                        </div>
                    </form>
                    <p class="mt-20">Already hava an account ?<a href="{{ route('login') }}"> Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


@include('includes.scripts')
