<?php
	
        $whichDoc = $_POST["invisubmit"];
        $query = "DELETE FROM doctor WHERE licensenumber ='$whichDoc'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
                die("databases query on art pieces failed. ");
        }

?>
