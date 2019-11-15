<!DOCTYPE html>

<html>
      	<head>
            <title>Question 8</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>
	<script type="text/javascript" src="../js/ques8_1.js"></script>
        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Assign Doctor-Patient Relationship</h2>

<form method="get" action="ques8.php">
    <button type="submit">Back</button>
</form>

<hr class="new1">
<p>Assign Doctor with Patient:</p>
<hr class="new2">
<form id="assigntreat" action="" method="post">
<p id="update1">Select Doctor</p>

              	
		<select name="assigndoc" id='assigndoc'>
		<option value='1'>Select Doctor</option>
                        <?php
                             	include "../php/pickdoctor.php";
                        ?>
                </select>
</form>

       	<?php
             	if (isset($_POST['assigndoc'])) {
                        include "../php/getdocpatient.php";
                }

		
	      	if (isset($_POST['addsubmit'])) {
                        include "../php/addtreat.php";
                }



        ?>



<hr class="new1">


</body>
</html>
