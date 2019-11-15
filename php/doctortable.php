<?php
	$name = "firstname";
	$order = "DESC";

	if (isset($_POST['sortsubmit'])) {

		if (isset($_POST['name']) & isset($_POST['order']))   // if ANY of the options was checked
  			$name = $_POST['name'];    // echo the choice
			$order = $_POST["order"];

	}
	

	$query = "SELECT * FROM doctor ORDER BY $name $order";

	$result = mysqli_query($connection,$query); 

	if (!$result) {
    	die("databases query on get doc failed.");
  	}

	$var1 = "Firstname (DESC)";
	$var2 = "Firstname (ASC)";
	$var3 = "Lastname (DESC)";
	$var4 = "Lastname (ASC)";


	echo "<tr>";

	if ($name == "firstname") {
		if ($order == "DESC"){
			echo "<th>".$var1."</th>";
		} else {
			echo "<th>".$var2."</th>";
		}
		echo "<th>Lastname</th>";
	} else {
		echo "<th>Firstname</th>";
                if ($order == "DESC"){ 
                        echo "<th>".$var3."</th>";
                } else { 
                        echo "<th>".$var4."</th>";
                }
	}

        echo "</tr>";

    	while ($row = mysqli_fetch_assoc($result)) {
    		$id = $row["licensenumber"];

        	echo "<tr value = $id>";
        	echo "<td>" . $row["firstname"]. "</td>";
        	echo "<td>" . $row["lastname"]. "</td>";
        	echo "</tr>";
    	}

	mysqli_free_result($result);
?>


