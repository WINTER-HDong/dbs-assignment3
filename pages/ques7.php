<!DOCTYPE html>

<html>
      	<head>
            <title>Question 7</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Check Patient Information</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">

<form id="searchpatient" action="" method="post">
    Patient OHIP (9 Number): <input type="text" name="ohip" required="required"  pattern="[0-9]+" minlength="9" maxlength="9"<br>

<button type="submit" name="searchsubmit">Search</button>
</form>
<br>

        <table id="patienttable">
                <caption>Patient and Treatment Doctor</caption>
                <tr>
                <th>Patient Firstname</th>
                <th>Patient Lastname</th>
                <th>Doctor Firstname</th>
                <th>Doctor Lastname</th>
                </tr>
              

   	 <?php
	 if (isset($_POST['searchsubmit'])) {
               	 include "../php/searchpatient.php";
         }
    	 ?>

 	</table>

<hr class="new1">
</body>
</html>
