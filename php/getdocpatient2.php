<?php

     	$whichDoc = $_POST["stopdoc"];
        $query0 = "SELECT * FROM doctor WHERE licensenumber = '$whichDoc'";
        $result0 = mysqli_query($connection, $query0);
        $row = mysqli_fetch_assoc($result0);
        echo "<h5> Doctor: ".$row['firstname']." ".$row['lastname']."</h5>";

        mysqli_free_result($result0);

        $query = "SELECT DISTINCT * FROM patient WHERE ohip IN (
                SELECT ohip FROM treat WHERE treat.licensenumber = '$whichDoc')";

        $result = mysqli_query($connection, $query);

                echo "<form id='showpat2' action='' method='post'>";
                echo "<p>Select Patient</p>";
                echo "<select name='stoppat' id='stoppat'>";

                while ($row = mysqli_fetch_assoc($result)) {
		 echo "<option value='$row[ohip]'>" . $row["firstname"] . " " . $row["lastname"] . " (" .$row["ohip"]. ")</option>";
                }

                echo "</select>";

        echo "<input type='hidden' name='docid2' value='$whichDoc'></input>";
        echo "<br><button type='submit' name='stopsubmit'>Stop</button>";
        echo "</form>";

?>
