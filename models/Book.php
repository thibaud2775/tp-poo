<?php

class Book
{
    protected $id;
    protected $name;

    public function add(Book $book) {
        $db = $this->getDb();
        $book = $db->prepare("INSERT INTO book (name) VALUES ('".$book->getName()."')");
        return $book->execute();
    }

    public function update(Book $book) {
        $db = $this->getDb();
        $book = $db->prepare("UPDATE book SET name = '".$book->getName()."' WHERE id = ".$book->getId());
        return $book->execute();
    }

    public function findAll() {
        $db = $this->getDb();
        $books = $db->prepare("SELECT * FROM book WHERE id > 0");
        $books->execute();
        $books = $books->fetchAll(PDO::FETCH_CLASS, "Book");
        return $books;
    }

    public function findById($id) {
        $db = $this->getDb();
        $book = $db->prepare("SELECT * FROM book WHERE id = ".$id);
        $book->execute();
        $book = $book->fetchAll(PDO::FETCH_CLASS, "Book");
        return $book;
    }

    public function deleteById($id) {
        $db = $this->getDb();
        $book = $db->prepare("DELETE FROM book WHERE id = ".$id);
        return $book->execute();
    }

    public function getDb() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=BookRent', "root", "paris");
        }
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return $db;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}