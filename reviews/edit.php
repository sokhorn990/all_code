<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php
include_once "connect.php";

$id = $_GET['id'];
$query = "SELECT * FROM student WHERE id = $id";
$data = mysqli_query($connect, $query);
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Add New</div>
                <div class="card-body">
                    <?php
                    foreach ($data as $value) {
                        ?>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $value['name'];?>">
                            </div>
                            <div class="form-group">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control" value="<?php echo $value['province'];?>">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>

                                <select name="gender" class="form-control">
                                
                                    <?php if ($value['gender'] === "Male") {  ?>
                                        <option value="Female">Female</option>
                                        <option value="Male" selected>Male</option>
                                    <?php } else { ?>
                                        <option value="Female" selected>Female</option>
                                        <option value="Male">Male</option>
                                    <?php } ?>
                                </select>

                            <?php
                            }
                            ?>
                            </div>

                            <button class="btn btn-info btn-block" type="submit" name="add">Update</button>
                        </form>
                </div>
            </div>
            <?php
            if (isset($_POST['add'])) {
                $username = $_POST['username'];
                $province = $_POST['province'];
                $gender = $_POST['gender'];
                if (!empty($username) && !empty($province) && !empty($gender)) {
                    $query = "UPDATE student SET name='$username',province='$province',gender='$gender' WHERE id = $id";
                    $data = mysqli_query($connect, $query);
                    if ($data) {
                        header('Location:index.php');
                    } else {
                        echo "Cannot insert data";
                    }
                } else {
                    echo "Field cannot empty";
                }
            }
            ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>