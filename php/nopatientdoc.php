<?php

        $query = "SELECT * FROM doctor LEFT JOIN treat ON doctor.licensenumber = treat.licensenumber
        WHERE treat.licensenumber IS NULL";   

        $result = mysqli_query($connection, $query);

        if (!$result) {
        die("databases query on get doc failed.");
        }

        while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["licensenumber"];

                echo "<tr value = $id>";
                echo "<td>" . $row["firstname"]. "</td>";
                echo "<td>" . $row["lastname"]. "</td>";
                echo "</tr>";
        }

    mysqli_free_result($result);
?>
