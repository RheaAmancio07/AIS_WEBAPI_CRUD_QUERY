<?php
  include_once('config.php');

  $id = $_GET['delId'];

  $sql = "DELETE FROM `employee` WHERE id = '$id' " ;
//   $result = $conn->query($sql);

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New record deleted successfully!')
    window.location.replace('http://localhost:8081/CRUD_Midterm/browse-employee.php');
    </script>";
   
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

?>