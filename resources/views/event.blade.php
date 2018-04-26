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
        <script>
            uid = {{ Auth::user()->id }}
        </script>
    </head>
    <body >

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

                <div class="container" style="margin-top: 50px">

                        <div class="row">
                  
                          <div class="col-sm-8 blog-main">
                  
                            <div class="blog-post">
                              <h2 class="blog-post-title">{{$event->name}}</h2>
                              <p class="blog-post-meta">{{$event->date}} by </p>
                  
                              {{$event->description}}
                            </div><!-- /.blog-post -->
                  
                            {{-- <div class="blog-post">
                              <h2 class="blog-post-title">Another blog post</h2>
                              <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
                  
                              <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                              <blockquote>
                                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              </blockquote>
                              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                              <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div><!-- /.blog-post -->
                  
                            <div class="blog-post">
                              <h2 class="blog-post-title">New feature</h2>
                              <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
                  
                              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                              <ul>
                                <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                                <li>Donec id elit non mi porta gravida at eget metus.</li>
                                <li>Nulla vitae elit libero, a pharetra augue.</li>
                              </ul>
                              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                              <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                            </div><!-- /.blog-post --> --}}
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
        <script src="/js/dash.js"></script>


    </body>
</html>
