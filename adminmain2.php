<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  session_start();
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');
$sql = "SELECT * FROM current";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
$_SESSION['phase']=$row['name'];

}
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Main</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">RVCE Project Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="adminmain.php">Home</a></li>
            
            
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#s4" data-toggle="modal" role="button">Add Project</a></li>
                <li><a href="#view">View Projects</a></li>
                <li><a href="#">Approve Projects</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#"></a></li>
                <li><a href="#s7" data-toggle="modal" role="button"></a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculty <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#s5" data-toggle="modal" role="button">Add Faculty</a></li>
                <li><a href="#s6" data-toggle="modal" role="button">View Faculty</a></li>
                <li><a href="#s8" data-toggle="modal" role="button">Allot Guides</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evaluation <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#timetable">Add Timetable</a></li>
                <li><a href="#timetable">View Timetable</a></li>
                <li><a href="#">Alter Timetable</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Phase</li>
                <li><a href="#s10" data-toggle="modal" role="button">Alter phase</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  
		  <li><a href="index.html">Sign out   <span class="glyphicon glyphicon-log-out"></span></a>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div id="shi6">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          

          <div class="inner cover"><br>
            
            <center>
              <?php   $sql5 = "SELECT * FROM project";
		$result5 = mysql_query($sql5);
 		if(!($row5 = mysql_fetch_array($result5)))
		{echo "<h2 style='margin-left:10px;'>List of Projects</h2><br><br><center>No projects entered</center>";}
	else{
	echo "<center>
		<div class='col-md-6' style='margin-left:10px;'>
          		<h2 style='margin-left:10px;'>List of Projects</h2>
				<table class='table table-bordered'>
            				<thead>
              					<tr>
							<th>#</th>
							<th>Title</th>
							<th>Description</th>
							<th>Domain</th>
							<th>Maximum Students</th>
						 </tr>
					</thead>
				<tbody>";
			
	$sql = "SELECT * FROM project";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['no']."</td>
                <td>".$row['title']."</td>
                <td>".$row['dis']."</td>
		<td>".$row['area']."</td>
                <td>".$row['max']."</td>
              </tr>";
	
	}

	echo '
             </tbody>
          	</table>
		</div>
		</center>
		<br>
		<br>
		<br>
		<br>';}?>
            
	<center>
	

<?php 
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Project_Management');

$sql1 = "SELECT no FROM project WHERE allot='no'";

$sql3="SELECT * FROM project WHERE no NOT IN(SELECT pno FROM evaluation1)";
$result = mysql_query($sql3);
$result1 = mysql_query($sql3);
$result2 = mysql_query($sql3);

if(!($row2 = mysql_fetch_array($result))){
echo"
        <div class='col-md-6' id='timetable' style='margin-left:40px;'>
		<h2 style='margin-left:40px;'>Entered Slots</h2>
          <table class='table table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Main Guide</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>";
			
$sql = "SELECT * FROM evaluation1";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['pno']."</td>
                <td>".$row['guide1']."</td>
                <td>".$row['date1']."</td>
                <td>".$row['time1']."</td>
              </tr>";
	
}

echo"       </tbody>
          </table>
        </div>";
}
else{


echo"<div id='timetable'>
        <div class='col-md-6' id='view' style='margin-left:10px;'>
		<h2>Entered Slots</h2>
          <table class='table table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Main Guide</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>";
			
$sql = "SELECT * FROM evaluation1";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['pno']."</td>
                <td>".$row['guide1']."</td>
                <td>".$row['date1']."</td>
                <td>".$row['time1']."</td>
              </tr>";
	
}

echo"       </tbody>
          </table>
        </div>	";
echo "	<form method='post' action='tt_connection.php' class='form-horizontal' style= 'width:300px;border:2px;' >";
echo"<h2 style='margin-left:10px;'></h2>";
echo "<select class='form-control' name='project_no'>";

while ($row = mysql_fetch_array($result1)) {
echo "<option value='" . $row['no'] ."'>" . $row['no'] ."</option>";
}
echo "</select>";

echo "Guide1:<select class='form-control' name='guide1'><br>";
while ($row1 = mysql_fetch_array($result2)) {
echo "<option value='" . $row1['guide'] ."'>" . $row1['guide'] ."</option>";
}
echo "</select><br>";
echo"Guide 2:<input type='text' class='form-control' name='guide2'></input><br>";
echo"Guide 3:<input type='text' class='form-control' name='guide3'></input><br>";
echo"Date:<input type='date' class='form-control' value='yyyy-mm-dd' name='date'></input><br>";
echo"Time:<input type='time' class='form-control' value='12:00' name='time'></input><br>";
echo"<input type='submit' class='btn btn-primary'></input><br>";
echo"</form>";
}

?></center></center>
          </div>

          <!--div class="mastfoot">
            <div class="inner">
              <p></p>
            </div>
          </div-->

        </div>

      </div>

    </div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<div class="modal fade" id="s4" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Add Project</center></p>
				</div>
				
				<div class="modal-body">
				<form method="post" name="addp" action="adminproject_connection.php" class="form-horizontal" >
					
					
					Title
						
							<input type="text" class="form-control" name="title"><br>	
		
					Project No.
						
							<input type="text" class="form-control" name="no"><br>
						
						
					Description
						<textarea rows="4" name="desc" class="form-control"></textarea><br>
						
						Maximum Students
						
							<input type="text" class="form-control" name="max"><br>
						
							<input type="submit" class="btn btn-primary"></input>
						
				</form>	
						
				
						
					
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="s5" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Add Faculty</center></p>
				</div>
				
				<div class="modal-body">
				<form method="post" action="adminfac_connection.php" class="form-horizontal" >
					
						ID.
						
							<input type="text" class="form-control" name="id"><br>
						Name
						
							<input type="text" class="form-control" name="name"><br>
						
					Specialty
						
						<input type="text" class="form-control" name="specialty"><br>
						
					Password
						
						<input type="text" class="form-control" name="password"><br>							
							<input type="submit" class="btn btn-primary"></input>
						
				</form>	
						
    
						
					
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="s6" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Faculty List</center></p>
				</div>
				
				<div class="modal-body">
				<?php echo" <table class='table table-bordered'>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Specialty</th>
                
              </tr>
            </thead>
            <tbody>";
			
$sql = "SELECT * FROM faculty";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['specialty']."</td>                
              </tr>";
	
}

echo"       </tbody>
          </table>";?>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="s7" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Add Approved Project</center></p>
				</div>
				
				<div class="modal-body">
				<form method="post" action="adminproject_connection1.php" class="form-horizontal" >
					
						Project No.
						
							<input type="text" class="form-control" name="no"><br>
						Title
						
							<input type="text" class="form-control" name="title"><br>
						
						Description
						
						<textarea rows="4" class="form-control" name="desc"></textarea><br>
						Student 1
						
							<input type="text" class="form-control" name="s1"><br>
						Student 2
						
							<input type="text" class="form-control" name="s2"><br>
						Student 3
						
							<input type="text" class="form-control" name="s3"><br>
							<input type="submit" class="btn btn-primary"></input>
						
				</form>	
						
    
						
					
				</div>
				
			</div>
		</div>
	</div>
	
<div class="modal fade" id="s8" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Add Guide</center></p>
				</div>
				
				<div class="modal-body">
				<?php ;
$sql5 = "SELECT no FROM project WHERE guide='notallotted'";
$sql6 = "SELECT id FROM faculty";
$result5 = mysql_query($sql5);
$result6 = mysql_query($sql6);
echo "<form  id='reg' method='post' action='addguide.php' class='form-horizontal' style='margin-left:20px; width:300px' >";
echo"<h4 style='margin-left:10px;'>Select Project</h2>";
echo "<select class='form-control' name='no'>";
while ($row5 = mysql_fetch_array($result5)) {
echo "<option value='" . $row5['no'] ."'>" . $row5['no'] ."</option>";
}
echo "</select>";

echo "Guide:<select class='form-control' name='guide'><br>";
while ($row6 = mysql_fetch_array($result6)) {
echo "<option value='" . $row6['id'] ."'>" . $row6['id'] ."</option>";
}
echo "</select>";


echo"<input type='submit' class='btn btn-primary'></input>";
echo"</form>";?>
						
    
						
					
				</div>
				
			</div>
		</div>
	</div>	
	
	<div class="modal fade" id="s10" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p><center>Update Phase</center></p>
				</div>
				
				<div class="modal-body">
				<?php ;
$sql7 = "SELECT name FROM current";

$result7 = mysql_query($sql7);

while ($row7 = mysql_fetch_array($result7)) {
echo "<center><h4>Current phase is:".$row7['name']."</h4></center>";
}
echo "<form  id='reg' method='post' action='phase_connection.php' class='form-horizontal' style='margin-left:20px; width:300px' >";
echo"Enter new Phase:<input type='text' name='phase' class='form-control'></input><br><br>";
echo"<input type='submit' id='update'class='btn btn-primary'></input>";
echo"</form>";?>	
						
						
					
				</div>
				<div class="modal-footer">
				
					
					
				</div>
			</div>
		</div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
