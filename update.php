<?php include_once('config.php');

if (isset($_POST['submit'])){
    $id = $_POST['userid'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $age =$_POST['age'];
    $gender = $_POST['gender'];

    //write sql query
    $sql = "UPDATE `employee` SET `firstname`='".$firstname."',`middlename`='".$middlename."',`lastname`='".$lastname."',`employeeAddress`='".$address."',`age`='".$age."',`gender`='".$gender."' WHERE  `id` ='" .$id. "'";
    //execute the query
    $result = $conn->query($sql);

    if ($result == TRUE){
        echo "<script>alert('New record updated successfully!')
            window.location.replace('http://localhost:8081/CRUD_Midterm/browse-employee.php');
            </script>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>