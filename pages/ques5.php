<!DOCTYPE html>

<html>
      	<head>
            <title>Question 5</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Update Hospital Name</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">


<form id="changehosname" action="" method="post">
    Select Hospital:
        <select name="selehos" id="selehos" required="required">
                        <?php
                             	include "../php/gethospital.php";
                        ?>
        </select>

        <br>
New Name: <input type="text" name="hosname" required="required" minlength="1" maxlength="20" size="20"><br>
<button type="submit" name="hosnamesubmit">Update</button>
</form>

       	<?php
             	if (isset($_POST['hosnamesubmit'])) {
                        include "../php/connecttodb.php";
                        include "../php/updatehospital.php";
                }

        ?>

<hr class="new1">


</body>
</html>
