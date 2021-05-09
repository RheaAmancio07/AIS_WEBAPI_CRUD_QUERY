<?php include_once('config.php');

if (isset($_POST['submit'])){
    //get variable from the form
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $age =$_POST['age'];
    $gender = $_POST['gender'];

    //write sql query
    $sql = "INSERT INTO employee(id,firstname,middlename,lastname,employeeAddress,age,gender) VALUES (Null,'$firstname','$middlename','$lastname','$address','$age','$gender')";
    //execute the query
    $result = $conn->query($sql);

    if ($result == TRUE){
        echo "<script>alert('New record created successfully!')
            window.location.replace('http://localhost:8081/CRUD_Midterm/browse-employee.php');
            </script>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>



