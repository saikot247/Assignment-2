<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this ->title = $title;
        $this -> availableCopies = $availableCopies;
    }

    public function getTitle(){
        return $this -> title;
    }

    public function getAvailableCopies() {
       $this -> availableCopies--;
       return $this->availableCopies;
    }

    public function borrowBook() {
        if($this -> getAvailableCopies() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }

}


class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        if($book->borrowBook()) {
            echo $this->getName(). " borrowed ". $book->getTitle();
        } else {
            echo $book -> getTitle()." is out of stock. Please check back later";
        }
    }

    public function returnBook(Book $book) {
        $book->returnBook();
        echo $this->getName()." returned ".$book->getTitle();
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

echo "Available Copies of '".$book1->getTitle()."': ".$book1->getAvailableCopies() ."</br>";
echo "Available Copies of '".$book2->getTitle()."': ".$book2->getAvailableCopies();



?>