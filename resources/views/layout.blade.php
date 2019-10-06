<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title','Home')
	</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.5-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/landing.css">


</head>

<body>
	<section class="hero is-info is-fullheight">

	<div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <h1 class ="title is-1">@yield('title','Home')</h1>
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="/notes">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>Home</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="/notes/create">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>Add Notes</span>
                                </a>
                            </span>
                            
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="/">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>About Us.</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
			<h1>@yield('mainTitle')</h1>
			</div>

			<div class="container">
				@yield('content')

			</div>
    </div>

    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
	
</body>
</html>