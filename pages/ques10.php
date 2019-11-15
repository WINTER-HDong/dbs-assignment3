<!DOCTYPE html>

<html>
      	<head>
            <title>Question 10</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Bouns: Update Image for Doctor</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>


<hr class="new1">

        <table id="doctable" style = "width: 100%">
                <caption>Doctor Information</caption>
                <?php
                     	include "../php/doctortableimg.php";
                ?>
        </table>

<hr class="new1">

        </body>
</html>
