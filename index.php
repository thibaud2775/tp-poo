<?php

require "views/app/header.html";

require "controllers/BookController.php";

$controller = new BookController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == "delete") {
        $controller->deleteOne($_GET['bookId']);
    }
    elseif ($_GET['action'] == "update") {
        $controller->showOne($_GET['bookId']);
    }
    elseif ($_GET['action'] == "confirmUpdate") {
        $controller->updateOne($_GET['bookId'], $_GET['bookName']);
    }
    elseif ($_GET['action'] == "add") {
        $controller->addForm();
    }
    elseif ($_GET['action'] == "confirmAdd") {
        $controller->addOne($_GET['bookName']);
    }
}

else {
    $controller->listAll();
}

require "views/app/footer.html";

?>