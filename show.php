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
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if($student): ?>
                    <p>ID - <?php echo $student->id; ?></p>
                    <p>Name - <?php echo $student->name; ?></p>
                    <p>Email - <?php echo $student->email; ?></p>
                    <p>Password - <?php echo $student->password; ?></p>
                    <p>Gender - <?php echo $student->gender; ?></p>
                    <p>DOB - <?php echo $student->dob; ?></p>
                    <p>Age - <?php echo $student->age; ?></p>
                <?php endif; ?>
                <a href="index.php" class="btn btn-info">Home</a>
                <a href="edit.php?id=<?php echo $student->id; ?>" class="btn btn-success">Update</a>
                <a href="destroy.php?id=<?php echo $student->id; ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</body>
</html>