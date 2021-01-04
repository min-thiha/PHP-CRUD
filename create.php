<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <form action="store.php" method="POST">
                    <div class="form-header">
                        <h2>Create New Person</h2>
                    </div>

                    <div class="form-group my-4">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group my-4">
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group my-4">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group my-4">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group my-4">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="form-group my-4">
                        <label for="age">Age:</label>
                        <input type="number" name="age" class="form-control">
                    </div>

                    <div class="form-group my-4">
                        <button class="btn btn-primary">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>