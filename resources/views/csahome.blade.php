<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONT /AWESOME CSS -->
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body background="{{ asset('img/college.jpg') }}">
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="/img/loco.jpeg" alt=""  /></a>
            	<div class="navbar-brand" href="#" style="margin-top: 10px;">CSA MANAGEMENT</div>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href=href="/dashboard">HOME</a></li>
                     <li><a href="#contact-sec">CONTACT</a></li>
                     @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn-default " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                        <a type="button" class="btn btn-primary" style="margin-top: 15px" data-toggle="modal" data-target="#exampleModal">Login</a>
                        <a type="button" class="btn btn-primary" style="margin-top: 15px" href='/register'>Signup</a>
                        {{-- <a href="{{ route('register') }}">Register</a> --}}
                    @endauth
                    @endif
                     {{-- @guest
                            <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
                     {{-- <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">LOGIN</a></li> --}}
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
      <!---below navbar of home page-->
 <!---today-->
 <div class="navbar-default sidebar" role="navigation" style="width: 20%;margin-top: 5%">
    <div class="sidebar-nav navbar-collapse">
        <ul class="sidebar" id="sidebar" style="list-style-type:none">
            <li>
                <h3 class="active">What We Offer</h3>
            </li>
            <li>
                <a href="/" class="active">Technical</a>
            </li>
            <li>
                <a href="/" class="active">Academics</a>
            </li>
             <li>
                <a href="/" class="active">Cultural</a>
            </li>
            <li>
                <a href="/" class="active">Sports</a>
            </li>
            <li>
                <a href="/" class="active">Adventure</a>
            </li>
            <li>
                <a href="/" class="active">Mountaineering</a>
            </li>
            <li>
                <a href="/" class="active">Cycling</a>
            </li>
            <li>
                <a href="/" class="active">SPIC MACKAY</a>
            </li>
            <li>
                <a href="/" class="active">Counselling</a>
            </li>
            <li>
                <a href="/" class="active">Life Skills</a>
            </li>
            <li>
                <a href="/" class="active">Gymnasium</a>
            </li>
            <li>
                <a href="/" class="active">Inter Nit Innovation</a>
            </li>
            <li>
                <a href="/" class="active">Mess and Hostel Facilities</a>
            </li>
            <li>
                <a href="/" class="active">Accounts and Billing</a>
            </li>
            <li>
                <a href="/" class="active">Training and Placements</a>
            </li>
            <li>
                <a href="/" class="active">Forms and Recomendations</a>
            </li>
        </ul>
    </div>
</div>        
<!------>

      
<div style="margin-left : 75%; margin-top : -42%">     
            <div class="col-md-10 message">
            <br>
            <div class="row">
                <div class="box-content btn btn-primary" id="x" style="width: 100%">
                    <h5>Upcomming Events</h5>
                </div>
                <div class="box-content" id="x" style="background-color: #fff;">
                    <marquee id="marquee1" direction = "up" onmouseover="this.stop();" onmouseout="this.start();" style="text-align: center;">
                        <p><a href="">Farewell</a></p>
                        <p><a href="">Independence day</a></p>
                        <p><a href="">Dahi handi</a></p>
                    </marquee>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="box-content btn btn-primary" id="x" style="width: 100%">
                    <h5>Recent Events</h5>
                </div>
                <div class="box-content" id="x" style="background-color: #fff">
                    <marquee direction = "up" onmouseover="this.stop();" onmouseout="this.start();" style="text-align: center;">
                        <p><a href="">Election</a></p>
                        <p><a href="">Institute Festival</a></p>
                        <p><a href="">Intitite Gathering</a></p>
                        <p><a href="">Departmental Gathering</a></p></marquee>
                </div>
            </div>
        </div>

                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
</form> --}}
<form method="POST" action="{{ route('login') }}">
  @csrf

  <div class="form-group">
    <label for="email">{{ __('E-Mail Address') }}</label>

          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
  </div>

  <div class="form-group">
      <label for="password" >{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

          @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
  </div>

  <div class="form-group row">
      <div class="col-md-6 offset-md-4">
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </label>
          </div>
      </div>
  </div>

  <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Login') }}
          </button>

          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
      </div>
  </div>
</form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">LOGIN</button>
      </div> --}}
    </div>
  </div>
</div>
/////////////////////sdjh//////////////////


     <!-- CONTACT SECTION END-->

     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
    <!--  Core Bootstrap Script -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!--  Flexslider Scripts --> 
         <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
     <!--  Scrolling Reveal Script -->
    <script src="{{ asset('js/scrollReveal.js') }}"></script>
    <!--  Scroll Scripts --> 
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!--  Custom Scripts --> 
         <script src="{{ asset('js/custom.js') }}"></script>
         <script src="{{ asset('js/sh.js') }}"></script>
</body>
</html>
