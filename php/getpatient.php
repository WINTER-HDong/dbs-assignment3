<?php
        $whichDoc = $_POST["deletedoclist"];
        $query = "SELECT * FROM patient 
                INNER JOIN treat ON patient.ohip = treat.ohip 
                WHERE treat.licensenumber = '$whichDoc'";

	$query2 = "SELECT * FROM doctor WHERE licensenumber = '$whichDoc'";

	
	$result2 = mysqli_query($connection, $query2);

        if (!$result2) {
                die("databases query on art pieces failed. ");
        }


	$row2 = mysqli_fetch_assoc($result2);
	mysqli_free_result($result2);

	$result = mysqli_query($connection, $query);
	if (mysqli_num_rows($result) == 0 ){
		echo "<p>No Patients Treated By " .$row2["firstname"]. " ".$row2["lastname"]."</p>";	
	} else {
		echo "<p>Patients Treated By " .$row2["firstname"]. " ".$row2["lastname"]."</p>";
	}

        echo "<ul>"; //put the artwork in an unordered bulleted list

        while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row["firstname"] . " " . $row["lastname"] . " (" .$row["ohip"]. ")</li>";
        }

        echo "</ul>";   //end the bulleted list

	echo "<button type='button' value='$whichDoc' onclick='delFunction(value)'>Delete Doctor</button>";
	mysqli_free_result($result);
?>
