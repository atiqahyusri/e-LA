<!-- a layout file--header/nav filelecturer-->

<!DOCTYPE html>
<html lang="en">
<div >
<head>
    <title>E-Learning Web Analytics</title>
    <link rel='stylesheet' type='text/css' href="cssfile/styleheader.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="header">

        <nav class="navbar navbar-style">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <!-- <span class="icon-bar"></span>-->
                        <!--<span class="icon-bar"></span>-->
                    </button>
                    <a href=''><img class='logo2' src='/e-LA/images/elablue_1.png'></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href='home.php'>Logout</a></li>
                       <!-- <li><a href='support.php'>Support</a></li>-->
                        <!--  <li><a href='{{ url_for('contact') }}'>Login</a></li> -->
                    </ul>
                    <div class="center">
                    <?php
                    echo ' ' .$_SESSION['User'];
                    ?>
                    </div>

                </div>
            </div>
        </nav>

    </header>

</body>
</html>
