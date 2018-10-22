<?php
        if(isset($_SESSION['user']))
        {
          $username=$_SESSION['user'];
			echo "Welcome '.$username.'";
          
          
          echo "<h4><a class="header-text" href="logout.php">Logout?</a></h4>";
        }
        ?>
