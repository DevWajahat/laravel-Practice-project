@include('includes.head')

<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">Edit Password</h2>
                    <form class="text-left clearfix" action="{{ route('updateuser.details',$user->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" value="" name="name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone_no" placeholder="Phone No" value="{{ $user->phone_no }}">
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
