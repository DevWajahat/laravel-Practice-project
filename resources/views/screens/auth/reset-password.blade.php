@include('includes.head')


<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">Reset Password</h2>
                    <form class="text-left clearfix" action="{{ route('password.update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" readonly class="form-control" placeholder="Email"
                                value="{{ $instance->email }}" name="email">
                        </div>
                        <div class="form-group">
                            <input type="hidden" readonly class="form-control" placeholder="Email"
                                value="{{ $instance->token }}" name="token">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                value="">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password" value="">

                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-center">Save Changes</button>
                        </div>
                    </form>
                    {{-- <p class="mt-20">Already hava an account ?<a href=""> Login</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</section>



@include('includes.scripts')
