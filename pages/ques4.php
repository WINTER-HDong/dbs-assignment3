<!DOCTYPE html>

<html>
      	<head>
            <title>Question 4</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>
	<script type="text/javascript" src="../js/ques4.js"></script>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Delete Doctor</h2>

<form method="get" action="../main.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">
<form id="deletedoc" action="" method="post">
                <select name="deletedoclist" id='deletedoclist'>
                        <option value="1">Select Here</option>
                        <?php
                                include "../php/pickdoctor.php";
                        ?>
                </select>
</form>

<hr class="new2">
        <?php
                if (isset($_POST['deletedoclist'])) {
                        include "../php/connecttodb.php";
                        include "../php/getpatient.php";
                }

        ?>
<hr class="new2">


<form id = 'invidemo' action="" method="post">
        <input type="hidden" name ='invisubmit' id="invisubmit" value="0";/>
</form>

        <?php
             	if (isset($_POST['invisubmit'])) {
                        include "../php/connecttodb.php";
                        include "../php/deldoctor.php";
                }

        ?>


<hr class="new1">

</body>
</html>
