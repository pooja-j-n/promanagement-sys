<HTML>

<HEAD>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Project Management system</title>
</head>
<link type="text/css" rel="stylesheet" href="style.css">
<?php include "header.php" ?>
</body>
<script>
function validateForm()
{
var x=document.forms["signup"]["u_name"].value;
var y=document.forms["signup"]["name"].value;
var e=y.replace(" ","");
 var filter = /^[A-Za-z]+$/;
 z=filter.test(e);
if (x==null || x=="" || y==null || y=="")
  {
  
  alert("Required Fields are Not filled ");
  return false;
  }
  if(z==0)
  {
  alert("enter a valid name");
  return false;
  }

}
</script>
<b>
	<header class="main" align=center>
	<link rel="stylesheet" type="text/css" href="style1.css"
	<label>	<font size=6 color="red" align="center">SIGN UP </font></label>
		
	</header>
	<h3>* denotes required field!</h3>
	
<font color=red size=6>		<form name="signup" method="post" action="signinnew_connection.php" onsubmit="return validateForm()"></font>
<br>
<br>
<label >* user_id</label>
			<input name="u_name" placeholder="enter  user id"><br>
<label>* enter password</label>
	<input name="pwd" placeholder="enter password" type="password"><br>
	<br>
	<br>
	<br>
	<br>
	<input name="submit" value="submit" type="submit"><br><br>
	<font size=4 color="blue"><a href="login.php">Back to Login Page</a></font>
			
		</b>
</form>
		
</b>
			</body>
</html>	
