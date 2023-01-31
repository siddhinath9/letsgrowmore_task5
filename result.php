<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
    $username = $_SESSION['username'];
} else {
    $loggedin = false;
}
include('dbconfig.php');
$fullname_search = "SELECT full_name FROM login where Username='$username'";

$query_userinfo = "SELECT * FROM result_1 where Username='$username'";

$data_userinfo = mysqli_query($conn, $query_userinfo);
$total_rows_userinfo = mysqli_num_rows($data_userinfo);
$result_userinfo = mysqli_fetch_assoc($data_userinfo);

$result = mysqli_query($conn, $fullname_search);
$result_info = mysqli_fetch_assoc($result)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Student Portal</h1>
        <div>
            <h4>Name : <?php echo $result_info["full_name"] ?></h4>
            <h4>Class : 12th</h4>
            <h4>Score Card:</h4>
        </div> <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Subject</th>
                    <th scope="col">Total</th>
                    <th scope="col">Marks Gained</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Physics</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['physics'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Chemistry</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['chemistry'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Mathematics</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['mathematics'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Biology</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['biology'] ?></td>
                </tr>
                <tr>
                    <th scope="row">English</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['english'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Marathi</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['marathi'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Total</th>
                    <td>600</td>
                    <td><?php echo $result_userinfo['total'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Average Score</th>
                    <td>100</td>
                    <td><?php echo $result_userinfo['average'] ?></td>
                </tr>
            </tbody>
        </table>
        <a href="logout.php">Click here to logout</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>