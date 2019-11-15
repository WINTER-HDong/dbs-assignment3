<!DOCTYPE html>

<html>
      	<head>
            <title>Question 10 Upload</title>
            <link rel="stylesheet" type="text/css" href="../doctors.css">
            <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        </head>

        <body>

        <?php
             	include "../php/connecttodb.php";
        ?>

	<h2>Upload Image for Doctor</h2>
	<h4>(find an image online and add the url to the doctor table)</h4>

<form method="get" action="ques10.php">
    <button type="submit">Back</button>
</form>


<hr class="new1">

<p id ='demo'></p>


<hr class="new2">

<br>
<br>

<form action="" method ='post'>
  Add URL of Image Online:<br>

  <input type = 'hidden' name='docid' id='hiddocid' value="">
  <input type="url" name="docurl" required = "required" size = '100' minlength = '1' maxlength = '100'> 
  <input type="submit" name='urlsubmit'>

</form>


       	<?php
             	if (isset($_POST['urlsubmit'])) {
                        include "../php/connecttodb.php";
                        include "../php/uploadurl.php";
                }

        ?>


<script type="text/javascript">

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

var license = getQueryVariable('license');
var fname = getQueryVariable('fname');
var lname = getQueryVariable('lname');

document.getElementById("demo").innerHTML = 'Doctor: ' + fname + ' ' + lname + '(' + license + ')';
document.getElementById("hiddocid").value = license;      
</script>


<br>
<hr class="new1">

        </body>
</html>
