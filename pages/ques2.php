<!DOCTYPE html>

<html>
      	<head>
            <title>Question 2</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
                include "../php/connecttodb.php";
        ?>

        <h2>List all the doctors who were licensed before a given date</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">


<form id="licensedate" action="" method="post">
  Licensed Date Before:
  <input type="date" name="licenseday" required="required" />
  <button type="submit" name="datesubmit">Find</button>
</form>
<hr class="new2">

        <table id="docbeforedate">
                <caption>doctor's license before given date</caption>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Specialty</th>
                <th>License Date</th>
                </tr>

                <?php
                     	include "../php/getdoclicense.php";
                ?>
        </table>
<hr class="new2">
</body>

</html>
