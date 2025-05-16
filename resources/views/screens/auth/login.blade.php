@include('includes.head')

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="{{ route('home') }}">
            <img src="images/logo.png" alt="">
          </a>
          <h2 class="text-center">Welcome Back</h2>
          <form class="text-left clearfix" action="{{ route('login')}}" method="post" >
            @csrf
            <div class="form-group">
              <input type="email" value="{{ old('email') }}" class="form-control @error ('password') is-invalid @enderror" name="email"  placeholder="Email">
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <input type="password" value="{{ old('password') }}" name="password" class="form-control @error ('password') is-invalid @enderror" placeholder="Password">
              @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center" >Login</button>
            </div>
          </form>
          <p><a href=""> Forgot your password?</a></p>
          <p class="mt-20">New in this site ?<a href="{{ route('register') }}"> Create New Account</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
@include('includes.scripts')
