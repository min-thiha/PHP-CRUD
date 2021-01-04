<?php 
    require_once "db.php";
    $db = new DB();
    $students = $db->index();
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
    <div class="container mt-5">
        <a href="create.php" class="btn btn-primary">Create</a>
        <div class="row mt-4 justify-content-center">
            <div class="col-8">
                <?php if($students): ?>
                    <table class="table table-warning table-striped border text-center">
                        <tr class="text-success">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($students as $student): ?>
                            <tr>
                                <td><?php echo $student->name; ?></td>
                                <td><?php echo $student->email; ?></td>
                                <td><?php echo ucfirst($student->gender); ?></td>
                                <td>
                                    <a href="show.php?id=<?php echo $student->id ?>" class="btn btn-outline-primary btn-sm">Detail</a>
                                    <a href="destroy.php?id=<?php echo $student->id ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </table>

                <?php else: ?>
                    <p>No person in database</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>