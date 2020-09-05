<?php
include_once "connect.php";
$query = mysqli_query($connect, "SELECT * FROM demo_php");
$id = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <a href="add.php" class="btn btn-success">Add new </a>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        while ($result = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['funllname']; ?></td>
                            <td><?php echo $result['gender']; ?></td>
                            <td><?php echo md5($result['passwords']); ?></td>
                            <td>
                                <a href="edit.php ?id=<?php echo $result['id']; ?>">edit</a>|
                                <a href="delete.php ?id=<?php echo $result['id']; ?> " onclick="return confirm('Are you sure!!')">delete</a>
                            </td>
                        </tr>
                    <?php
                   $id++;
                 }
                    ?>
                </table>
            </div>
            <div class="col-10"></div>
        </div>
    </div>
</body>

</html>