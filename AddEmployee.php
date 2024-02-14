<?php
include 'SaveEmp.php'
 ?>
<html>

<head></head>
<link rel="stylesheet" href="mystyle.css">
<body style="background-image: url('bg1.jpeg');">
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <nav>
        <div class="logo">Sharks Incorporated</div>
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="SharksMain.html">Home</a></li>
           
			

        </ul>
    </nav>

    <fieldset>
        <br><content for="EmpID">Employee ID</content>
        <input type="text" name="EmpID" value="<?php echo $EmpID ?>"><br>
        <content for="fname">First Name</content>
        <input type="text" name="fname" value="<?php echo $fname ?>"><br> 
        <content for="mname">Middle Name</content>
        <input type="text" name="mname" value="<?php echo $mname ?>"><br> 
		<content for="lname">Last Name</content>
        <input type="text" name="lname" value="<?php echo $lname ?>"><br>
		<content for="D_id">Department ID</content>
        <input type="text" name="D_id" value="<?php echo $D_id ?>"><br>
        <content for="rankcode">Rank Code</content>
        <input type="text"name="rankcode" value="<?php echo $rankcode ?>"><br><br>
        
     
        <input type="submit" name="saverec" id="submit" value="Save Record"><br>
        <input type="submit" name="searchrec" id="submit" value="Search Record"><br>
        <input type="submit" name="deleterec" id="submit" value="Delete Record"><br>
        <input type="submit" name="updaterec" id="submit" value="Update Record"><br>
        <input type="submit" name="cls" id="submit" value="Clear Form"><br>

    </fieldset>
</form>																																																																																																				<?php
      echo $messAlert;
      ?>
</body>
</html>