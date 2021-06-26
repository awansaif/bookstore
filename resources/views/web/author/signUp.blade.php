<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Card offer - Admin">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="cardoffer">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Book Store </title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('adminStyle/assets/css/connect.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/css/dark_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="auth-page sign-in">

    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="auth-form">
                        <div class="row">
                            <div class="col">
                                <div class="logo-box"><a href="#" class="logo-text"><img
                                            src="{{ asset('assests/img/logo.png') }}" width="250px" height="150px"
                                            alt=""></a></div>
                                @if(Session::has("success"))
                                <div class="alert alert-success">Your registeration has been successfull. Admin will
                                    active you</div><br>
                                @php Session::pull('success'); @endphp
                                @endif
                                <form method="post" action="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" id="email"
                                            aria-describedby="emailHelp" placeholder="Enter username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" id="email"
                                            aria-describedby="emailHelp" placeholder="Enter username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-submit">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-xl-block">
                    <div class="auth-image"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('adminStyle/assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/js/connect.min.js') }}"></script>
</body>

</html>
