<?php
include 'connect.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {

    // Get the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Secure password hashing

    // SQL to insert data into the prison_staff table
    $sql = "INSERT INTO prison_staff (first_name, last_name, dob, position, password)
            VALUES (:firstname, :lastname, :dob, :position, :password)";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':position', $position);
       // $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Execute the statement
        $stmt->execute();
        header('location: ../admindashboard.php');
        // Success 

    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
}
// remember to add an email column to the new database after the php code works

?>

