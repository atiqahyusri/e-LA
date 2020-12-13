<!-- login html file-->

<?php include('header.php');?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css'  href="cssfile/new_styledash.css">
</head>
<body>
<h1 class="title">Hi lecturers!</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="/e-LA/images/googleAnalytics.png" class="img-responsive">
        </div>
        <div class="col-sm-6">
            <form class= "formlogin" action="process_lecdash.php" method="post">
				<?php if (isset($_GET['Invalid'])) { ?>
     		<p class="error"><?php echo $_GET['Invalid']; ?></p>
			<?php } ?>
			
                <label class="inputuserppswdlogin" for="uname"><b>Lecturer Name</b></label><br>
                <input class="inputtextlogin" type="text" placeholder="Enter Username" name="uname" required><br><br>
                <label class="inputuserppswdlogin" for="psw"><b>Password</b></label><br>
                <input class="inputtextlogin" type="password" placeholder="Enter Password" name="psw" required><br>
                <button class="btninput" name="login">Login</button>
            </form>
        </div>

    </div>
</div>
</body>
