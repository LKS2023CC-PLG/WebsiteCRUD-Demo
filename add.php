<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Add Data</h2>
        <form action="addAction.php" method="post" name="add">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
						<input type="submit" name="submit" value="Add" class="btn btn-success">
						<a href="index.php" class="btn btn-danger">Home</a>
					</td>
			
				</tr>
            </table>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


