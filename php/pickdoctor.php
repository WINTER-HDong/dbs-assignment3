<?php

    $query = "SELECT * FROM doctor ORDER BY firstname DESC";
    $result = mysqli_query($connection,$query); 
    if (!$result) {
        die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["licensenumber"];
        echo "<option value = $id>".$row["firstname"]." ".$row["lastname"]."</option>";
    }

    mysqli_free_result($result);
?>
