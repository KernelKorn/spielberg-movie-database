<!DOCTYPE html>
<html lang="en">
	<!-- the head section -->
	<head>
		<title>Spielberg Movies</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		<!-- <link rel="shortcut icon" href="images/favicon.ico" > -->
	</head>

	<!-- the body section -->
	<body>
		<nav class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
            <div class="container">
            	<a class="navbar-brand" href="#">Spielberg's Movies</a>
            	@if(!Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                    	<li>
                       		<form id="searchform">
								<input class="search form-control" type="text" placeholder="Search For Actor:"/>
								<button class="btnSearch" type="button">Search</button>
							</form>
						</li>
                       <li>{{ HTML::link('/login', 'Login') }}</li>
                    </ul>
            	@else
                    <ul class="nav navbar-nav">
                		<li>{{ HTML::link('admin/users', 'Users') }}</li>
                		<li>{{ HTML::link('admin/entities', 'Entities') }}</li>
                		<li>{{ HTML::link('admin/lists', 'Lists') }}</li>
                        <li>{{ HTML::link('admin/pagekeywords', 'Page Keywords') }}</li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
            		  <li>{{ HTML::link('/logout', 'Logout') }}</li>
                    </ul>
            	@endif
            </div>
        </div>
    </nav>
		<div class="wrapper">
			@yield('content')
		</div><!--/#wrapper -->

		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="/js/actor.js" type="text/javascript"></script>
		<script src="/vendor/bootstrap/js/modal.js"></script>
		@yield('js')

	</body>
</html>