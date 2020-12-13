<?php include('header.php');?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css'  href="cssfile/new_styledash.css">
</head>

<body>

<h1 class="title">Hi student!</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="/e-LA/images/education.png" class="img-responsive">
        </div>
        <div class="col-sm-6">
            <form class="formlogin" action="process_studtdash.php" method="post">
			
			<?php if (isset($_GET['Invalid'])) { ?>
     		<p class="error"><?php echo $_GET['Invalid']; ?></p>
			<?php } ?>
			
                <label class="inputuserppswdlogin" for="studentuname"><b>Student Name</b></label><br>
                <input class="inputtextlogin" type="text" placeholder="Enter Username" name="studentuname" required><br><br>
                <label class="inputuserppswdlogin" for="studentpsw"><b>Password</b></label><br>
                <input class="inputtextlogin" type="password" placeholder="Enter Password" name="studentpsw" required><br>
                <button class="btninput" name="studentlogin">Login</button>
            </form>
        </div>

    </div>
</div>
</body>