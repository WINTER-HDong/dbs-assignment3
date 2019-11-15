<!DOCTYPE html>

<html>
      	<head>
            <title>Question 8</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>
	<script type="text/javascript" src="../js/ques8_2.js"></script>
        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Stop Doctor-Patient Relationship</h2>

<form method="get" action="ques8.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">
<p>Stop Doctor with Patient:</p>
<hr class="new2">
<form id="stoptreat" action="" method="post">
<p>Select Doctor</p>

                <select name="stopdoc" id='stopdoc'>
                <option value='1'>Select Doctor</option>
                        <?php
                             	include "../php/pickdoctor.php";
                        ?>
                </select>
</form>

       	<?php
             	if (isset($_POST['stopdoc'])) {
                        include "../php/getdocpatient2.php";
                }


                if (isset($_POST['stopsubmit'])) {
                        include "../php/stoptreat.php";
                }

        ?>


<hr class="new1">


</body>
</html>
