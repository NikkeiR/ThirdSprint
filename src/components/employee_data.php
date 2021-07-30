<?php
    require_once "bootstrap.php";

    print("<table class='table'><thead>");
    print("<tr><th>ID</th><th>Name</th><th>Project</th><th>Action</th></tr>");
    print("</thead>");
    $employee = $entityManager->getRepository('Models\Employee')->findAll();
    foreach($employee as $e) {
        print('<tr><td>'.$e->getId().'</td> 
                   <td>'.$e->getFirstname().'</td>
                   <td>'.$e->getProject()->getName().'</td>
                   <td><a href="?delete='.$e->getId().'"><button>DELETE</button></a>
                       <a href="?updatable='.$e->getId().'"><button>UPDATE</button></a></td></tr>');
    }
    print("</table>");
?>