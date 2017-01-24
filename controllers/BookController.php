<?php

require "./models/Book.php";

class BookController
{
    public function listAll() {
        $book = new Book();
        $books = $book->findAll();
        require_once "./views/book/list.php";
    }

    public function addForm() {
        require_once "./views/book/add.php";
    }

    public function addOne($name) {
        $book = new Book();
        $book->setName($name);
        return $book->add($book);
    }

    public function showOne($id) {
        $book = new Book();
        $book = $book->findById($id);
        require_once "./views/book/show.php";
    }

    public function updateOne($id, $name) {
        $book = new Book();
        $book->setId($id);
        $book->setName($name);
        return $book->update($book);
    }

    public function deleteOne($id) {
        $book = new Book();
        return $book->deleteById($id);
    }
}