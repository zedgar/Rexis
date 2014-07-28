<!--
File:       index.html
Author:     Edgar Zulu 
Project:    Student Record System - Rexis 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Rexis | Chalimbana University</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <link rel="stylesheet" type="text/css" href="formstyle.css"/>
  </head>
  
  <body>
  <img src="logov4.jpg" width="123" height="124" alt="Chalimbana University" style=""/>  
  
  <div class="page">             
    
    <div class="welcome">
      <p class="welcomeword">Welcome to Rexis - Student Record System </p>
      <p class="welcomesmalltxt"> Primary Teachers' Diploma by Distance Learning</p>
      <div class="loginpad">
        <div class="loginform">
          <div class="choice6"><a href="frmRegistration.php">New student registration</a></div>
          <div class="choice7"><a href="frmTermReg.php">Term/ Residential Registration</a></div>
          <div class="choice8"><a href="frmSelectrm.php">Choose a Room /Check accounts clearance</a></div>
        </div>
      </div><!-- end div loginpad -->
    </div><!-- end div welcome -->

    <div class="formwrapx"><form action="retrivesnum.php" method="POST">
      <div >
        Enter your NRC to retrieve your student number
        <input class="textbox" type="text" name="nrc" value="" size="50" placeholder="Enter Your NRC here"/>
      </div>
      <p><div></div>
      <div class="submitbtn"><input type="submit" value="Get student Number" name="submit" /></div>
      <div class="footer">When you get the Number this time Write it down</div>
    </form></div>
    
    <div class="titled">Login</div><form name="login_i" action="iLogin.php" method="POST">
        <div class="form-input">
        <input title="Username" name="username" class="textbox" size="20" value="" type="text" placeholder="Username">
        </div>
        <div class="clearer"><!-- --></div>
        <div class="form-input">
        <input title="Password" name="password" class="textbox" value="" size="20" type ="password" placeholder =" Password">
        <p><input id="loginbtn" value="Login" type="submit" class="login_btn"></p>
    </div>
    
    <div class="index-footer" align="center">&copy;2014 Edgar Zulu</div><!-- end div index-footer -->
    
  </div><!-- end div page -->
  </body>
</html>
