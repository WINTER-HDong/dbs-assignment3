<?php
        $docid = $_POST["docid"];
        $ohip = $_POST["assignpat"];

        $query = "INSERT INTO treat (ohip, licensenumber) VALUES ($ohip, '$docid')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
                die("databases query on art pieces failed. ");
        }

        echo "<p>Assign Treatment Successful! </p>"        
?>
