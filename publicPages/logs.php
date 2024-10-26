<?php
include 'connect.php'; // Ensure the connection is established

// Check if form was submitted
if (isset($_POST['login'])) {
    // Get the form inputs
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);

    // Check if the username exists in the database
    $retrievePassword = "SELECT password FROM prison_staff WHERE staff_id = '$username'";
    $result = mysqli_query($conn, $retrievePassword);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $passHash = $row['password'];

        // Verify the password
        if (password_verify($pass, $passHash)) {
            $inTime = date('Y-m-d H:i:s');
            $storeLog = "INSERT INTO logs (staff_id, logInTime) VALUES('$username', '$inTime')";

            // Check if the log is successfully inserted
            if (mysqli_query($conn, $storeLog)) {
                // Redirect only after successful log entrys
                header('location://localhost//prisoninfomanagement/prison-info-management-system/inmateManagement/inmateMgt.php' );
                exit();  // Ensure script stops after redirection
            } else {
                echo 'Error storing log in time. Please try again.';  // Logging failed
            }
        } else {
            echo 'Invalid password. Please try again.';  // Incorrect password
        }
    } else {
        echo 'User not found. Please check your credentials.';  // No matching user
    }
}
