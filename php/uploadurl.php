<?php

    $docid = $_POST['docid'];
    $docurl = $_POST['docurl'];
    
    $query = "UPDATE doctor SET docimage = '$docurl' WHERE licensenumber = '$docid'";
    $result = mysqli_query($connection, $query);



    if (!$result) {
        die("databases query on update url licensed date failed.");
    } else {
    	echo "<h4>" . "Successed: Doctor Image URL Uploaded !" . "</h4>";
    }
?>
