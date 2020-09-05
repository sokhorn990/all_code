
<?php
    include_once "connect.php";
    $id= $_GET['id'];
    $query =mysqli_query($connect, "SELECT * FROM demo_php WHERE id = $id");
    
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
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="group-form">
                    <form action="#" method="post">
                        <div class="card">
                            <div class="card-header text-center"><h2>Edit</h2></div>
                            <div class="card-body">
                                     <?php
                                     while($result = mysqli_fetch_array($query)){
                                    ?>
                                <div>
                                    <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                                    <label for="username">Username:</label>
                                    <input type="username" placeholder="Username" name="username" class="form-control" value="<?php echo $result['username'];?>">
                                </div><br>
                                <div>
                                <label for="password">Password:</label>
                                    <input type="password" placeholder="New Password" name="password"  class="form-control">
                                </div>
                                <div>
                                <label for="gender">Gender:</label>
                                    <select name="gender" id="">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <?php
                                    }
                                 ?>
                                <br>
                               <button class="btn btn-primary" name="edit">Edit</button>
                               <button class="btn btn-danger float-right" type="reset">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['edit'])){
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $id = $_POST['id'];
        $password = md5($_POST['password']);
        $update = mysqli_query($connect, "UPDATE demo_php SET username = '$username', passwords = '$password',gender ='$gender' WHERE id='$id'");
        if($update==true){
            header("location:index.php");
        }else{
            echo "Cannot update";
        }
       
    }
?>