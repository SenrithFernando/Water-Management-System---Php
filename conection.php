<?php

    $conn=mysqli_connect("localhost","root","","watermanagement");
    if (!$conn) {?>
        <script>
            alert("Check Database Connection");
        </script>
    <?php }

?>