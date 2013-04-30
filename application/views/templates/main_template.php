<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>{title}</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/styles/main.css" />

	<!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
   	<link href='http://fonts.googleapis.com/css?family=Alike' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div class="header">
			<div class="logo">
				<h2>Coding Gazette</h2>
				<div class="tagline">Coding News</div>
			</div>
			<div class="searchbox">
				<form>
					<input type="text" name="searchterm" />&nbsp;<input type="submit" value="Search" />
				</form>
			</div>
		</div>
		<div id="menu">
			| <a class="menu" href="/">Home</a> | <a class="menu" href="/">About</a> | <a class="menu" href="/">Contact</a> | 
		</div>
		<div id="left">
			left column<br />
		</div>
		<div id="content">
			<?php $this->load->view($content);?>
		</div>
		<div id="right">
			right column
		</div>
		<div id="footer">
			the footer
		</div>
	</div>
</body>
</html>
