<?php
include('dbconfig.php');
$id = $_GET['id'];

$query_userinfo = "SELECT * FROM result_1 where id='$id'";

$data_userinfo = mysqli_query($conn, $query_userinfo);
$total_rows_userinfo = mysqli_num_rows($data_userinfo);
$result_userinfo = mysqli_fetch_assoc($data_userinfo);

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin_update.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <title>Update Student Result</title>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true
        });
    </script>

</head>

<body>
    <div class="container">
        <div class="title">Update Result</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" value="<?php echo $result_userinfo['Username'] ?>" name="fname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Physics</span>
                        <input type="text" value="<?php echo $result_userinfo['physics'] ?>" name="physics" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Chemistry</span>
                        <input type="text" value="<?php echo $result_userinfo['chemistry'] ?>" name="chemistry" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mathematics</span>
                        <input type="text" value="<?php echo $result_userinfo['mathematics'] ?>" name="mathematics" required autofocus>
                    </div>
                    <div class="input-box">
                        <span class="details">Biology</span>
                        <input type="text" value="<?php echo $result_userinfo['biology'] ?>" name="biology" required autofocus>
                    </div>
                    <div class="input-box">
                        <span class="details">English</span>
                        <input type="text" value="<?php echo $result_userinfo['english'] ?>" name="english" required autofocus>
                    </div>
                    <div class="input-box">
                        <span class="details">Marathi</span>
                        <input type="text" value="<?php echo $result_userinfo['marathi'] ?>" name="marathi" required autofocus>
                    </div>
                    <div class="input-box">
                        <span class="details">Total</span>
                        <input type="text" value="<?php echo $result_userinfo['total'] ?>" name="total" required autofocus>
                    </div>
                    <div class="input-box">
                        <span class="details">Average</span>
                        <input type="text" value="<?php echo $result_userinfo['average'] ?>" name="average" required autofocus>
                    </div>
                </div>
                <!-- <div class="gender-details">
          <input type="radio" name="gender" value="y" id="dot-2">
          <input type="radio" name="gender" value="n" id="dot-3">
          <input type="radio" name="gender" value="l" id="dot-1">
          <span class="gender-title">Want to take Premium Membership</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">YES</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">No</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Remind me later</span>
            </label>
          </div>
        </div> -->
                <div class="btn btn-success">
                    <input type="submit" value="Update Details" name="update">
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['update'])) {
    $Username = $_POST['fname'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $mathematics = $_POST['mathematics'];
    $biology = $_POST['biology'];
    $english = $_POST['english'];
    $marathi = $_POST['marathi'];
    $total = $_POST['total'];
    $average = $_POST['average'];

    $query_update = "UPDATE result_1 set Username='$Username', physics='$physics', chemistry='$chemistry', mathematics='$mathematics' ,biology='$biology',english='$english',marathi='$marathi',total='$total',average='$average' WHERE id ='$id'";
    $data_update = mysqli_query($conn, $query_update);

    if ($data_update) {
        echo "<script>alert('Successfully Updated')</script>";
?>
        <meta http-equiv="refresh" content="0; url=http://localhost/Student Result Management System/admin.php#" />
<?php
    } else {
        echo "Failed";
    }
}

?>