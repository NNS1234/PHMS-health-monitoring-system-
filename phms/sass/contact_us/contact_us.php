<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->
	<link rel="stylesheet" href="css/contactstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
	
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top nav-color" style="
    background-color: rgb(6, 57, 112)!important;">
		<a class="navbar-brand" href="#"><b>Personal Health Monitoring System</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../user/login.php">Login|Register</a>
				</li>

			</ul>

		</div>
	</nav>

	
	<div>
		<div class="wrapper">
			<div class="inner">
				<form action="contact_us_service.php" enctype="multipart/form-data" method="POST">
					<h3>Contact Us</h3>
					<p>If you are facing any issue, Please fill out this form. We'll get it in touch with you.</p>
					<label class="form-group">
						<input type="text" name="username" class="form-control" required>
						<span>Your Name</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" name="mailId" class="form-control" required>
						<span for="">Your Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<textarea name="message" id="" class="form-control" required></textarea>
						<span for="">Your Message</span>
						<span class="border"></span>
					</label>
					<button name="save_contact" type="submit">Submit
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
	</div>
	<!-- contact js -->
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/contact.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>