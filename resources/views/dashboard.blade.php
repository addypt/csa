<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img class="logo-custom" src="../assets/img/loco.jpeg" alt=""  /></a>
                            <div class="navbar-brand" href="#" style="margin-top: 10px;">CSA MANAGEMENT</div>
                        </div>
                        <div class="navbar-collapse collapse move-me">
                            <ul class="nav navbar-nav navbar-right">
                                <li ><a href="/dashboard">HOME</a></li>
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
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Login</a>
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
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
                            </li>
                            <li>
                                <a href="" class="active" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-support fa-tasks"></i>  Book Lecture Hall </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lecture Hall Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/event/create">
                @csrf
                        <div class="form-group">
                            <label class="cols-sm-2 control-label">Date</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa fa" aria-hidden="true"></i></span>
                                    <input name="date" type="Date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="cols-sm-2 control-label">Lh Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa fa" aria-hidden="true"></i></span>
                                     <select name="lh" class="form-control">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="cols-sm-2 control-label">Time</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa fa" aria-hidden="true"></i></span>
                                    <input name="time" type="Time" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="cols-sm-2 control-label">Event Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa fa" aria-hidden="true"></i></span>
                                    <input name="title" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="cols-sm-2 control-label">Description</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa fa" aria-hidden="true"></i></span>
                                    <input name="description" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
          </div>
          <div class="modal-footer">
            
      </div>
    </div>
  </div>
</div>    
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="/js/raphael.min.js"></script>
        <script src="/js/morris.min.js"></script>
        <script src="/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/startmin.js"></script>

    </body>
</html>
