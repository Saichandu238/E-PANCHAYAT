<?php
// Start the session only if it is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$Village = $_SESSION['Village'];
$Mandal = $_SESSION['Mandal'];
$Name=$_SESSION['Name'];
$District=$_SESSION['District'];
$Gmail=$_SESSION['Gmail'];
$Number=$_SESSION['Number'];
$Aadhar_Number=$_SESSION['Aadhar_Number'];
$Ward_Number=$_SESSION['Ward_Number'];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panchayat Raj & Rural Employment</title>
    <style>
    body {
        margin: 0;
        background-color:  white;
        font-family: Arial, sans-serif;
        background-image: url("http://localhost/Mini_Project/Images/T2.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        
    }

    .header {
        background-color: white;
        padding: 0px;
        text-align: center;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .header-text {
        text-align: center;
        flex-grow: 1;
    }

    .header img {
        padding: 10px;
        width: 100px;
        height: 100px;
    }

    .links {
        text-align: left;
        margin-top: 10px;
        background-color: #f1f1f1;
        padding: 10px;
        border: 5px solid #ccc;
    }

    .links a {
        margin: 0 15px;
        text-decoration: none;
        color: #483D8B;
        font-weight: bold;
    }

    .links a:hover {
        text-decoration: underline;
    }

    /* Scrolling text */
    .scrolling-text {
        margin-top: 10px;
        background-color: #f1f1f1;
        padding: 10px;
        text-align: center;
    }

    .scrolling-text marquee {
        font-weight: bold;
        color: #e90a33;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #4682B4;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: whitesmoke;
    }

    .login-box {
        width: 380px;
        height: 210px;
        margin: auto;
        border-radius: 3px;
        background-color: white;
        font-size: 15px;
    }

    h1 {
        text-align: center;
        padding-top: 10px;
    }

    form {
        width: 270px;
        height: 350px;
        margin-left: 20px;
    }

    form label {
        display: flex;
        margin-top: 20px;
        font-size: 15px;
    }

    form input {
        width: 120%;
        padding: 8px;
        border: solid;
        border: 2px solid gray;
        outline: none;
    }

    input[type="submit"] {
        width: 320px;
        height: 35px;
        margin-top: 70px;
        border: none;
        background-color: green;
        color: white;
        font-size: 18px;
    }

    p {
        text-align: center;
        padding-top: 30px;
        font-size: 15px;
    }

    .para-2 {
        text-align: center;
        color: black;
        font-size: 16px;
        margin-top: -13px;
    }

    .para-2 a {
        color: blue;
    }

    .info-box {
        flex: 1;
        margin: 0 10px;
    }

    .info-box h3 {
        text-align: center;
        font-family: "Arial";
        font-weight: bold;
        color: white;
    }

    .table-box {
        text-align: center;
        font-family: "Arial";
        font-weight: bold;
        color: white;
    }

    .info-box .stats {
        width: 100%;
        border-collapse: collapse;
        border: 10px solid #ccc;
    }

    <style>

    /* Table styles with modified background and font */
    .stats {
        width: 100%;
        border-collapse: collapse;
        /* Ensures borders are merged together */
        background-color: #f9f9f9;
        /* Light background color for the entire table */
        font-family: "Verdana", sans-serif;
        /* Change font family */
        color: #333;
        /* Text color */

    }

    .stats th {
        background-color: whitesmoke;
        /* Darker background color for table headers */
        color: blueviolet;
        /* White text for table headers */
        font-weight: bold;
        text-align: left;
        padding: 10px;
        /* More padding for table headers */
        /* border: 1px solid black; */
    }

    .stats td {
        background-color: lightblue;
        /* White background color for table data */
        color: blue;
        /*Dark grey text for table data */
        padding: 10px;
        /* Padding for table data cells */
        border: 0px solid black;
        /* Lighter border color */
        font-size: 14px;
        /* Font size for table data */

    }
    </style>


    </style>
</head>

<body>
    <div class="header">
        <div class="header-content">
            <img src="http://localhost/Mini_Project/Images/EPM3.jpg" width="120" height="120" alt="E-Panchayat">
            <div class="header-text">
                <h1>Government of Telangana WardMember Panel</h1>
                <h2>Welcome <?php echo "$Name"; ?></php>, Wardmember ( <?php echo "$Ward_Number "; ?></php>) of
                    <?php echo "$Village" ?> Village</h2>
            </div>
            <img src="http://localhost/Mini_Project/Images/Emblem%20of%20Telengana%20(1).jpg" width="120" height="120"
                alt="Telangana logo">
        </div>
    </div>

    <!-- Links Section -->
    <div class="links">
        <a href="WardMember_Profile.php">
            <img src="http://localhost/Mini_Project/Images/HSymbol.jpg" width="25" height="25" alt="Home">
        </a>

        <a href="WardMemberProfile_view.php">View Profile</a>
        <a href="UpdateWardMember_details.php">Update Details</a>
        <a href="Family_Registration.html">Family Registration</a>
        <a href="Userdata_WardMember.php">View User Details</a>

        <div class="dropdown">
            <a href="#" class="dropbtn">Registration Details</a>
            <div class="dropdown-content">
                <a href="VillageCountdata_WardMember.php">View Registration Count</a>
                <a href="Workerdata_WardMember.php">Gram-Panchayat Workers data</a>
            </div>
        </div>


        <a href="Problem_WradMember.html">Report a Problem</a>

        <div class="dropdown">
            <a href="#" class="dropbtn">View Problems</a>
            <div class="dropdown-content">
                <a href="UserReportedProblems_WardMember.php">UserReported</a>
                <a href="VillageRepotedPeoblems_WardMember.php">EmployeesReported</a>
            </div>
        </div>

        <a href="Schemes_WardMember.php">Schemes</a>

        <div class="dropdown">
            <a href="#" class="dropbtn">Members data</a>
            <div class="dropdown-content">
                <a href="SROdata_WardMember.php">SRO's data</a>
                <a href="StateManagerdata_WardMember.php">StateManager data</a>
                <a href="DROdata_WardMember.php">DRO's data</a>
                <a href="MROdata_WardMember.php">MRO's data</a>
                <a href="Serpanchdata_WardMember.php">Serpanch data</a>
                <a href="Admindata_WardMember.php">Admin data
                    <a href="WardMemberdata_WardMember.php">Ward Member's data</a>
            </div>
        </div>
    </div>





    <?php
// Start the session only if it is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$Village = $_SESSION['Village'];
$Mandal = $_SESSION['Mandal'];
$Name=$_SESSION['Name'];
$District=$_SESSION['District'];
$Gmail=$_SESSION['Gmail'];
$Number=$_SESSION['Number'];
$Aadhar_Number=$_SESSION['Aadhar_Number'];
$Ward_Number=$_SESSION['Ward_Number'];
// Connect to the database
$host = 'localhost';
$dbname = 'user';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// SQL query to count the number of families registered from a village
$sql = "SELECT COUNT(*) AS totalFamilies FROM family_details WHERE Village = '$Village'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$totalFamilies = $stmt->fetch(PDO::FETCH_ASSOC)['totalFamilies'];

$village = "$Village";

// SQL query to get FamilyMembers count JSON data for the specified village
$sql = "SELECT FamilyMembers FROM family_details WHERE Village = :village";
$stmt = $conn->prepare($sql);
$stmt->execute([':village' => $village]);

$totalFamilyMembers = 0;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $familyMembers = json_decode($row['FamilyMembers'], true);
    $totalFamilyMembers += count($familyMembers) + 1;
}

// SQL query to get the sum of Voters for the specified village
$sql = "SELECT SUM(Voters) AS totalVoters FROM family_details WHERE Village = :village";
$stmt = $conn->prepare($sql);
$stmt->execute([':village' => $village]);
$totalVoters = $stmt->fetch(PDO::FETCH_ASSOC)['totalVoters'];

// SQL query to get the sum of educated people for the specified village
$sql = "SELECT SUM(Education) AS totalLiterature FROM family_details WHERE Village = :village";
$stmt = $conn->prepare($sql);
$stmt->execute([':village' => $village]);
$totalLiterature = $stmt->fetch(PDO::FETCH_ASSOC)['totalLiterature'];
if ($totalFamilyMembers<1){
    $LiteracyRate=0;
}
else{
$LiteracyRate = ($totalLiterature / $totalFamilyMembers) * 100;
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "$Village" ?> Village Data</title>
        <style>
        table {
            width: 40%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-image: url("http://localhost/Mini_Project/Images/BM2.jpeg");
            color: black;
            font-weight: bold;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
            background-image: url("http://localhost/Mini_Project/Images/BM2.jpeg");
            color: black;

        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;

        }

        .profile-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(10, 10, 10, 10.1);
        }

        .profile-container h2 {
            margin-top: 5px;
            text-align: center;
        }

        .profile-table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .profile-table th,
        .profile-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            /* background-image: url("http://localhost/Mini_Project/Images/BM2.jpeg") ;  */
        }

        .profile-table th {
            /* background-image: url("http://localhost/Mini_Project/Images/BM2.jpeg") ;  */
            font-weight: bold;
        }

        .profile-container a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;

        }

        .profile-container a:hover {
            background-color: #45a049;

        }
        </style>
    </head>

    <body>
        <div class="profile-container">
            <table class="profile-table">

                <caption><?php echo $Village; ?> Village Data</caption>
                <tr>
                    <th>Metric</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Total Number of Families Registered</td>
                    <td><?php echo $totalFamilies; ?></td>
                </tr>
                <tr>
                    <td>Village Population</td>
                    <td><?php echo $totalFamilyMembers; ?></td>
                </tr>
                <tr>
                    <td>Total Number of Voters</td>
                    <td><?php echo $totalVoters; ?></td>
                </tr>
                <tr>
                    <td>Total Number of Educated People</td>
                    <td><?php echo $totalLiterature; ?></td>
                </tr>
                <tr>
                    <td>Literacy Rate</td>
                    <td><?php echo number_format($LiteracyRate, 2); ?>%</td>
                </tr>
            </table>
        </div>

    </body>

    </html>