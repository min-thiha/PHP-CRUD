<?php
    require_once "db.php";
    $db = new DB();
    $student = $db->show($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <?php if($student): ?>
                    <h3 class="text-center">EDIT</h3>
                    <form action="update.php" method="POST">

                        <input type="hidden" name="id" value="<?php echo $student->id; ?>">

                        <div class="form-group my-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="<?php echo $student->name; ?>" class="form-control" placeholder="Enter your name ...">
                        </div>

                        <div class="form-group my-4">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" value="<?php echo $student->email; ?>" class="form-control" placeholder="Enter your email ...">
                        </div>

                        <div class="form-group my-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="<?php echo $student->password; ?>" class="form-control" placeholder="Enter your password ...">
                        </div>

                        <div class="form-group my-4">
                            <label for="gender">Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="" disabled>Select your gender ...</option>
                                <option value="male" <?php if($student->gender == "male") {echo "selected";} ?> >Male</option>
                                <option value="female" <?php if($student->gender == "female") {echo "selected";} ?> >Female</option>
                            </select>
                        </div>

                        <div class="form-group my-4">
                            <label for="dob">Date of Birth</label>
                            <input type="date"  value="<?php echo $student->dob; ?>" name="dob" class="form-control">
                        </div>

                        <div class="form-group my-4">
                            <label for="age">Age</label>
                            <input type="number" value="<?php echo $student->age; ?>" name="age" class="form-control">
                        </div>

                        <button class="btn btn-success">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancle</a>
                    </form>
                <?php else: ?>
                    <p>Not Found</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>