<!DOCTYPE html>
<html lang="en">
<script language='JavaScript' type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Elgg converter!</h1>

	<div id="body">
		
	This is a bunch of SQL statements that will read from the River plugin and send it to the OUNL Learning Locker. All hardcoded at the moment natch.
	
	
	The following converts do an SQL query and submit to the following Learning Locker: http://sharetec.celstec.org/learninglocker/public/data/xAPI/statements".
	If you want to edit the mysql check /application/convertion_model.php , if you want want to edit the JSON output check controller/convertion.php
	<h2>Pick a converter:</h2>
	<h3>implemented<h3>
	<ul>
	<li><a href="<?php echo base_url() ?>convertion/usercreatedpage">User created page</a></li>
	<li><a href="<?php echo base_url() ?>convertion/userupdatedpage">User updated page</a></li>
	<li><a href="<?php echo base_url() ?>convertion/userrateditem">User rated item</a> (broken)</li> 
	<li><a href="<?php echo base_url() ?>convertion/usercreatedfile">User uploaded file</a></li> 
	
	
	<!--  
	<a href="<?php echo base_url() ?>'convertion/userrateditem ?>">User rated item</a>
	<a href="<?php echo base_url() ?>'convertion/usercreatedpage ?>">User uploaded a file</a>
	<a href="<?php echo base_url() ?>'convertion/usercreatedpage ?>">User is now a member</a>
	<a href="<?php echo base_url() ?>'convertion/usercreatedpage ?>">User is now a friend with another user</a>
	-->
	</ul>		
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>