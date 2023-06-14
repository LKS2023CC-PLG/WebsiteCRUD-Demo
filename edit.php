<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Data</h2>

           <!--- <a href="index.php" class="btn btn-primary">Home</a> -->

        <form name="edit" method="post" action="editAction.php">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" value="<?php echo $age; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td>
						<input type="submit" name="update" value="Update" class="btn btn-success">
						<a href="index.php" class="btn btn-danger">Home</a>
					</td>
                </tr>
            </table>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>