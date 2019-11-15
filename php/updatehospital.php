<?php

    $hospitalcode = $_POST['selehos'];
    $newname = $_POST['hosname'];

    $query = "UPDATE hospital SET hospitalname = '$newname' WHERE hospitalcode = '$hospitalcode'";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("databases query on get doc licensed date failed.");
    }

    header("Refresh:0");
?>

