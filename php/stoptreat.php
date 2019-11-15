<?php
     	$docid = $_POST["docid2"];
        $ohip = $_POST["stoppat"];

        $query = "DELETE FROM treat WHERE ohip = $ohip AND licensenumber = '$docid'";

        $result = mysqli_query($connection, $query);

        if (!$result) {
                die("databases query on art pieces failed. ");
        }

	echo "<p>Delete Treatment Successful! </p>"
?>



