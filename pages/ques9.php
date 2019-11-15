<!DOCTYPE html>

<html>
      	<head>
            <title>Question 9</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>The first and last name of any doctor who has no patients:</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">

        <table id="doctable">
                <caption>Doctor without Patient</caption>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                </tr>
                <?php
                     	include "../php/nopatientdoc.php";
                ?>
        </table>






<hr class="new1">

</body>
</html>
