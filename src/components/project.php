<?php
namespace Models;
require_once "bootstrap.php";

// Add new project
if(isset($_POST["create_project"]) && !empty($_POST["project"])) {
    $project = new Project();
    $project->setName($_POST["project"]);
    $entityManager->persist($project);
    $entityManager->flush();
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Delete project (neveikia..)
if(isset($_GET["delete"])) {
    $user = $entityManager->find("Models\Project", $_GET["delete"]);
    $entityManager->remove($user);
    $entityManager->flush();
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Update project (neveikia..)
if(isset($_POST["update_name"])) {
    $user = $entityManager->find("Models\Project", $_POST['update_id']);
    $user->setName($_POST["update_name"]);
    $entityManager->flush();
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Update table
if(isset($_GET["updatable"])) {
    $project = $entityManager->find("Models\Project", $_GET["updatable"]);
    print('<form action="" method="POST">
              <input type="hidden" name="update_id" value="'.$project->getId().'">
              <input type="text" name="update_name" value="'.$project->getName().'"><br>
              <input type="submit" value="Submit">
           </form>');
    print("<hr>");
}

// Projects table
print("<table class='table'><thead>");
print("<tr><th>ID</th><th>Project</th><th>Name</th><th>Action</th></tr>");
print("</thead>");
$projects = $entityManager->getRepository("Models\Project")->findAll();
foreach($projects as $p) {
    foreach($p->getEmployee() as $e) {
        print('<tr><td>'.$p->getId().'</td> 
                <td>'.$p->getName().'</td>
                <td>'.$e->getFirstname().'</td>
                <td><a href="?delete='.$p->getId().'"><button>DELETE</button></a>
                    <a href="?updatable='.$p->getId().'"><button>UPDATE</button></a></td></tr>');
    }
}
print("</table>");
?>