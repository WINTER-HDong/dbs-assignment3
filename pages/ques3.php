<!DOCTYPE html>

<html>
      	<head>
            <title>Question 3</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Insert Doctor Informtaion</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">

<form id="inputdoc" action="" method="post">
    First Name: <input type="text" name="infirstname" required="required" minlength="1" maxlength="20" size="20"><br>
    Last Name: <input type="text" name="inlastname" required="required" minlength="1" maxlength="20" size="20"><br>
    License Number: <input type="text" name="inlnumber" required="required" minlength="4" maxlength="4" size="4"><br>
    Specialty: <input type="text" name="inspecialty" required="required" minlength="1" maxlength="30" size="30"><br>
    License Date: <input type="date" name="indate" required="required"><br>
    Hospital:
        
        <select name="gethospital" id="gethospital" required="required">
                        <?php
                             	include "../php/gethospital.php";
                        ?>
        </select>

        <br>
<button type="submit" name="insertsubmit">Insert</button>
</form>

    <?php
            include "../php/insertdoctor.php";
    ?>


<hr class="new1">
</body>
</html>
