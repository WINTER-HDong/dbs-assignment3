<?php

    if (isset($_POST['insertsubmit'])) {
        $firstname = $_POST['infirstname'];
        $lastname = $_POST['inlastname'];
        $license = $_POST['inlnumber'];
        $specialty = $_POST['inspecialty'];
        $hospital = $_POST['gethospital'];
        $date = $_POST['indate'];

        $query1 = "SELECT * FROM doctor WHERE licensenumber='$license'";

        $result1 = mysqli_query($connection,$query1);

        if (!$result1) {
            die("databases query on get doc licensed date failed.");
        }

        $num_rows = mysqli_num_rows($result1);
        
        if ($num_rows != 0){
            echo "<h5>" . "Failed: license number " .$license." already existed !" . "</h5>";
		mysqli_free_result($result1);
        } else {
            $query2 = "INSERT INTO doctor (licensenumber, firstname, lastname, specialty, date, worksinhoscode) 
                    VALUES ('$license', '$firstname', '$lastname', '$specialty', '$date', '$hospital')";

         	$result2 = mysqli_query($connection,$query2);
        	if (!$result2) {
           	 die("databases query on get doc licensed date failed.");
        	}

        	echo "<h4>" . "Successed: Doctor Information Inserted !" . "</h4>";
        	}

    }
?>
