<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">

        <title>Homepage</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="{{ asset('/bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('/bootstrap-3.3.7/css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('/bootstrap-3.3.7/css/blog.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/homepage.css') }}" rel="stylesheet">
        
        <!-- коллекция иконок -->
        <link rel="stylesheet" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css') }}">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="{{ asset('/bootstrap-3.3.7/assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
        <script src="{{ asset('/bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js') }}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        <div class="container">

            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">@yield('title')</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">                           
                            <!--
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="{{ ($namePage === 'blog') ? 'active' : '' }}"><a href="/blog">Заметки</a></li>
                            <li class="{{ ($namePage === 'resume') ? 'active' : '' }}"><a href="/resume">Резюме</a></li>
                            <li class="{{ ($namePage === 'projects') ? 'active' : '' }}"><a href="/projects">Проекты</a></li>
                            <li class="{{ ($namePage === 'about') ? 'active' : '' }}"><a href="/about">Обо мне</a></li>
                            <!--
                            <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                            <li><a href="../navbar-static-top/">Static top</a></li>
                            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                            -->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
            @if (isset($showDeveloper) AND $showDeveloper === true)
                @yield('developer', '')
            @endif
            
            @yield('content')
            
        </div> <!-- /container -->

        <footer class="blog-footer">
            <div class="container">
                <p>Создан в июне 2017 года.</p>
                <p>
                    <a href="#">Вверх <i class="fa fa-arrow-up" aria-hidden="true"></i></a>  
                </p>
            </div>  
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('/bootstrap-3.3.7/assets/js/vendor/jquery.min.js') }}"><\/script>')</script>
        <script src="{{ asset('/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{ asset('/bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    </body>
</html>
