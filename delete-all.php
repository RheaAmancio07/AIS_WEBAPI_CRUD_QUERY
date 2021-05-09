<?php
   include_once('config.php');

   $sql = "TRUNCATE TABLE `employee`";
 //   $result = $conn->query($sql);
 
   if (mysqli_query($conn, $sql)) {
        echo "<script>alert('All record Deleted successfully!')
            window.location.replace('http://localhost:8081/CRUD_Midterm/browse-employee.php');
        </script>";
   } else {
     echo "Error deleting record: " . mysqli_error($conn);
   }
?>