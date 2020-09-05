
<?php
    include_once "connect.php";
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
                            <div class="card-header text-center"><h2>Add New</h2></div>
                            <div class="card-body">
                                <div>
                                    <label for="username">Username:</label>
                                    <input type="username" placeholder="Username" name="username" class="form-control">
                                </div><br>
                                <div>
                                <label for="password">Password:</label>
                                    <input type="password" placeholder="Password" name="password"  class="form-control">
                                </div>
                                <div>
                                <label for="gender">Gender:</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <br>
                               <button class="btn btn-primary" name="add">Add New</button>
                               <button class="btn btn-danger float-right" type="reset ">Cancel</button>
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

    if(isset($_POST['add'])){
        $username = $_POST['username']; 
        $gender = $_POST['gender']; 
        $password = md5( $_POST['password']);
        $query = "INSERT INTO demo_php (username,passwords,gender )  VALUES ('$username','$password','$gender')";
        $result  = mysqli_query($connect,$query);
        if($result){
            header("Location: index.php");
        }else{
            echo "cannot Add !!!!";
        }


    }
?>