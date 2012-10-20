<!DOCTYPE html>

<html>
<head>
	<title>Mayaten Simple Framework</title>

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- JS -->
	<script type="text/javascript" src="../assets/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/superfish.js"></script>
</head>
<body>
	<!-- Navbar Start -->
	<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="home">Mayaten Simple Framework</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

	<!-- Content Start -->
	<div class="container">
    	<h2>Users List</h2>
    	<ul style="list-style: square;">
		<?php foreach($data as $user) : ?>
			<li><?php echo "ID: {$user->uid} Username: {$user->username}"; ?></li>
		<?php endforeach; ?>
		</ul>

        <hr>

        <footer>
        	<p>&copy; <a href="http://mayaten.com">Mayaten</a> Simple Framework 2012 | Coded by <a href="http://mayaten.com">Reece Ballano</a></p>
        </footer>
	</div>
</body>
</html>
