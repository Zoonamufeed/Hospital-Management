<?php
include_once 'config.php';

if (count($_POST) > 0) {
    $p_id = $_POST['p_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "UPDATE patient SET first_name='$first_name', last_name='$last_name', gender='$gender', phone_no='$phone_no', email='$email', address='$address' WHERE p_id='$p_id'";

    if (mysqli_query($conn, $sql)) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Error updating record: " . mysqli_error($conn);
    }
}

$stmt = mysqli_prepare($conn, "SELECT * FROM patient WHERE p_id = ?");
mysqli_stmt_bind_param($stmt, "s", $_GET['p_id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);

mysqli_close($conn);
?>

<html>
<head>
    <title>Update Patient Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-bottom: 10px;
            color: #007bff;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: overline;
        }
    </style>
    <script>
        // display a message after submitting the form
        function showMessage(message) {
            var messageDiv = document.getElementById('message');
            messageDiv.innerText = message;
        }
    </script>
</head>
<body>
    <center>
        <form name="frmUser" method="post" action="update_patient.php">
            <div><?php if (isset($message)) {echo $message;} ?></div>
            <div style="padding-bottom:5px;">
                <h1><a href="paview.php">Update patient list</a></h1>
            </div>
            Patients ID:
            <input type="text" name="p_id" value="<?php echo $row['p_id']; ?>">
            <br><br>

            First Name:
            <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
            <br><br>

            Last Name:
            <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
            <br><br>

            Gender:
            <input type="text" name="gender" value="<?php echo $row['gender']; ?>">
            <br><br>

            Phone No:
            <input type="text" name="phone_no" value="<?php echo $row['phone_no']; ?>">
            <br><br>

            E-mail:
            <input type="text" name="email" value="<?php echo $row['email']; ?>">
            <br><br>

            Address:
            <input type="text" name="address" value="<?php echo $row['address']; ?>">
            <br><br>

            <input type="submit" name="submit" value="Submit" class="button">
            <br><a href="paview.php">View</a>
        </form>
    </center>
</body>
</html>


