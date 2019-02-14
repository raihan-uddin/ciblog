<html>
<head>
	<title>Ci Blog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
<!--<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php /*echo base_url() */?>">ciBlog</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav mr-auto">
				<li class="nav-item"><a href="<?php /*echo base_url() */?>">Home</a></li>
				<li class="nav-item"><a href="<?php /*echo base_url() */?>about">About</a></li>
			</ul>

		</div>
	</div>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	<a class="navbar-brand" href="#">CIBLOG</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
			aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url() ?>">Home<!-- <span class="sr-only">(current)</span>--></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url() ?>about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url() ?>posts">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>
<div class="container">
