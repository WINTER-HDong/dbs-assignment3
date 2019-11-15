<?php

    $query = "SELECT * FROM hospital";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases hospital query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["hospitalcode"];
        echo "<option value = $id>".$row["hospitalname"]. " (".$row["city"]." ,".$row["province"].")</option>";
    }

    mysqli_free_result($result);
?>
