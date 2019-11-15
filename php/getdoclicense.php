<?php


    if (isset($_POST['datesubmit'])) {
        if (isset($_POST['licenseday'])) { 
            $date = $_POST['licenseday'];    


	    $query = "SELECT * FROM doctor WHERE date < '$date'";
   	    $result = mysqli_query($connection,$query);
    	    if (!$result) {
        	die("databases query on get doc licensed date failed.");
    	    }

    	    while ($row = mysqli_fetch_assoc($result)) {
        	$id = $row["licensenumber"];

        	echo "<tr value = $id>";
        	echo "<td>" . $row["firstname"]. "</td>";
        	echo "<td>" . $row["lastname"]. "</td>";
        	echo "<td>" . $row["specialty"]. "</td>";
        	echo "<td>" . $row["date"]. "</td>";
        	echo "</tr>";
    	    }
    	    mysqli_free_result($result);
	}
    }
?>

