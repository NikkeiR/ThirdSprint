<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="projects">Projects</a>
            </li>
            <li>
                <a class="nav-link" href="employees">Employees</a>
            </li>
        </ul>
    </header>
    <section class="container">
        <?php require_once "./src/components/project.php"; ?>
    </section>
    <section class="container">
        <form action="" method="POST">
            <input type="text" name="project" placeholder="Project name"><br>
            <input type="submit" name="create_project" value="Submit">
        </form>    
    </section>
</body>
</html>