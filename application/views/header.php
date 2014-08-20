<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>CSS with jQuery Slider</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo base_url();?>css-images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/loginslider.css" type="text/css" media="all" />
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/functions.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.slidepanel.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">

      <div class="signupbox">
        <h2>Signup Here</h2>
        <form action="#" method="post">
		  <table width="100%" cellpadding="5" cellspacing="3" border="0">
			<tr>
				<td colspan="2">
					<span style="text-align:left;text-size:13px;">
						Signup As: 
						<input type="radio" name="user_type" id="user_type" value="Tutor" checked="checked" /> Tutor
						<input type="radio" name="user_type" id="user_type" value="Student" /> Student
					</span>
				</td>
			</tr>
			<tr><td colspan="2"> &nbsp;</td></tr>
			<tr>
				<td>
					First Name: <input type="text" class="formText_big" name="first_name" id="first_name" />
				</td>
				<td>
					Last Name: <input type="text" class="formText_big" name="last_name" id="last_name" />
				</td>
			</tr>
			<tr>
				<td>
					Email: <input type="text" class="formText_big" name="email_address" id="email_address" />
				</td>
				<td>
					Mobile: <input type="text" class="formText_big" name="mobile_number" id="mobile_number" />
				</td>
			</tr>
			<tr>
				<td>
					Password: <input type="password" class="formText_big" name="password" id="password" />
				</td>
				<td>
					Re-type Password: <input type="password" class="formText_big" name="repassword" id="repassword" />
				</td>
			</tr>
			<tr><td colspan="2"> &nbsp;</td></tr>
			<tr>
				<td colspan="2" style="text-align:center;">
					<input type="submit" class="buttons" name="doSignup" id="doSignup" value="Signup" /> &nbsp; &nbsp;
					<input type="reset" class="buttons" name="doCancel" id="doCancel" value="Reset" />
				</td>
			</tr>
          </table>
        </form>
      </div>
      <div class="topbox last">
        <h2>Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <label for="pupilname">Username:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Click Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Sigup & Login</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
	<!-- Begin Shell -->
	<div class="shell">
		<!-- Begin Header -->
		<div id="header">
			<h1 id="logo"><a title="YourLogo" href="#">YourLogo</a></h1>
			<!-- Begin Navigation -->
			<div  id="navigation">
				<ul>
					<li title="Home" class="active"><a href="#">Home</a></li>
					<li title="About"><a href="#">About</a></li>
					<li title="Work"><a href="#">Work</a></li>
					<li title="Blog"><a href="#">Blog</a></li>
					<li title="Contact"><a href="#">Contact</a></li>
				</ul>
			</div>
			<!-- End Navigation -->
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Header -->