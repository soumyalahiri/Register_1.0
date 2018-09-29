<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans|Montserrat:300,350,400|Oxygen|Raleway|Lato:300|Open+Sans+Condensed:700|Fredoka+One|Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="mobile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">
	<title>Register | Tech Club | DPS Ruby Park</title>
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "85vw";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>
</head>
<body>
		<div class="headerh">
					
						<div id="mySidenav" class="sidenav">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<a href="../index.html" class="uppl">HOME</a><br>
						<a href="../Register" class="uppl">REGISTER</a><br>
						<a href="#"><span id="upl">DEPARTMENTS</span></a>
						<a href="../CP" class="lpl"><span id="lpl">Competitive Programming</span></a>
						<a href="../WD" class="lpl"><span id="lpl">Web Development</span></a>
						<a href="../QZ" class="lpl"><span id="lpl">Quizzing</span></a>
						<a href="../MM" class="lpl"><span id="lpl">Multimedia</span></a><br>
						<a href="../Calendar" class="uppl">CALENDAR</a><br>
						<a href="../Blog" class="uppl">BLOG</a><br>
						<a href="../Contact" class="uppl">CONTACT</a><br>
						<a href="../About" class="uppl">ABOUT US</a><br>
						</div>
						<span style="font-size:30px;cursor:pointer" onclick="openNav()">&nbsp;&nbsp;&nbsp;&#9776;</span>
												
			<br><br>
		</div>
		<div class="header">
			
						<span id="main1">&lt;/&gt;</span>
			<br><br>
		</div>
				<div class="formpre">
				<span class="s1">TECH CLUB MEMBERSHIP</span><br><br>
				<span class="s2">Register</span><br><br><br>
				<span class="s3">Please note that only students of DPS Ruby Park may enroll.</span>
				</div><br><br>
		<form action="member.php" method="POST" name="myForm" class="gg" align="center">	
			<div class="form">
			<div class="field-wrap">
              <label>Name</label>
              <input type="text" class="name" name="name" required>
            </div>
			<div class="field-wrap">
            <label>Email Address</label>
            <input type="text" class="email" name="email" required>
			</div>
			<div class="field-wrap">
            <label>Class (Do not use Roman Numbers)</label>
            <input type="text" class="class" name="class" required>
			</div>
			<div class="field-wrap">
            <label>Section</label>
            <input type="text" class="section" name="section" required>
			</div>
			<div class="field-wrap">
            <label>Mobile Number</label>
            <input type="text" class="mn" name="mn" required>
			</div>
			<div class="field-wrap">
            <label>Admission Number</label>
            <input type="text" class="regno" name="regno" required>
			</div>
			
			<div class="aint">Area(s) of Interest</div><br>
			<section>
			<div class="checkboxFour"><div class="tex">Competitive&nbsp;Programming</div>
			<input type="checkbox" value ="1" id ="checkboxFourInput" name="a1"/>
			<label for="checkboxFourInput"></label>
			</div>
			<div class="checkboxFive"><div class="tex">Web&nbsp;Development</div>
			<input type="checkbox" value ="1" id ="checkboxFiveInput" name="a2"/>
			<label for="checkboxFiveInput"></label>
			</div>
			<div class="checkboxSix"><div class="tex">Multimedia</div>
			<input type="checkbox" value ="1" id ="checkboxSixInput" name="a3"/>
			<label for="checkboxSixInput"></label>
			</div>
			<div class="checkboxSeven"><div class="tex">Quizzing</div>
			<input type="checkbox" value ="1" id ="checkboxSevenInput" name="a4"/>
			<label for="checkboxSevenInput"></label>
			</div>
			</section>
			<br>
			
			<div class="field-wrap">
            <label>Password</label>
            <input type="password" id="password" class="pw1" name="password1" required>
			</div>
			<div class="field-wrap">
            <label>Confirm Password</label>
            <input type="password" class="pw2" name="password2" id="confirm_password" required/>
			</div>
			<script>
				var password = document.getElementById("password")
					, confirm_password = document.getElementById("confirm_password");

				function validatePassword(){
					if(password.value != confirm_password.value) {
							confirm_password.setCustomValidity("Passwords Don't Match");
				} else {
					confirm_password.setCustomValidity('');
				}
			}

				password.onchange = validatePassword;
				confirm_password.onkeyup = validatePassword;
			</script>
			<br>
			<div class="sub"><input type="submit" value="SUBMIT" name="register"></div>
			<br><br><br>
			</div>
		</form>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script src="index.js"></script>
</body>
</html>