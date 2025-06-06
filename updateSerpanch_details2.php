<?php
session_start(); // Start the session

// Check if the form data is posted and if the admin_id is set in the session
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['Serpanch_id'])) {
    $serpanch_id = $_SESSION['Serpanch_id']; // Use consistent session variable name

    $name = $_POST['Name'];
    $Aadhar_Number = $_POST['Aadhar_Number'];
    $Joining_date = $_POST['Joining_date'];
    $ending_date = $_POST['ending_date'];
    $Village = $_POST['Village'];
    $Mandal = $_POST['Mandal'];
    $District = $_POST['District'];
    $Number = $_POST['Number'];
    $Gmail = $_POST['Gmail'];
    $Password = $_POST['Password'];
   
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "villagelogins";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the update query
    $sql = "UPDATE serpanchdetails SET Name = ?, Aadhar_number = ?, Joining_date = ?, ending_date = ?, Village = ?, Mandal = ?, District = ?, Number = ?, Gmail = ?, Password = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $name, $Aadhar_Number, $Joining_date, $ending_date, $Village, $Mandal, $District, $Number, $Gmail, $Password, $serpanch_id);

    if ($stmt->execute()) {
        echo "<p>Details updated successfully. <a href='Serpanch_Profile.php'>Click here to go back</a></p>";

    } else {
        echo "<p>Error updating details: " . $stmt->error . "</p>";
    }

    $stmt->close();
} else {
    echo "<p>Invalid request.</p>";
}
?>