<?php
include 'SaveRank.php'
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
            <br><br><br><br>
            <content for="Rankcode">Rank Code</content>
            <input type="text" name="Rankcode"><br>
            <content for="Ranktitle">Rank Title</content>
            <input type="text" name="Ranktitle"><br>
            <content for="Rate">Rate</content>
            <input type="text" name="Rate"><br>
            

<br>
            <input type="submit" name="saverec" id="submit" value="Save Record"><br><br>
            <input type="submit" name="cls" id="submit" value="Clear Form"><br>

        </fieldset>
    </form> <?php
      echo $messAlert;
      ?>
</body>

</html>