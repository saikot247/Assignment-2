<?php
class Book {
    //TODO: Add properties as Private
    
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        //TODO: Initialize properties
        
        $this ->title = $title;
        $this -> availableCopies = $availableCopies;
    }

    //TODO: Add getTitle method

    public function getTitle(){
        return $this -> title;
    }

     //TODO: Add getAvailableCopies method

    public function getAvailableCopies() {
       $this -> availableCopies--;
       return $this->availableCopies;
    }

     //TODO: Add borrowBook method

    public function borrowBook() {
        if($this -> getAvailableCopies() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //TODO: Add returnBook method

    public function returnBook() {
        $this->availableCopies++;
    }

}


class Member {
    //TODO: Add properties as Private
    
    private $name;

    public function __construct($name) {
        //TODO: Initialize properties
        
        $this->name = $name;
    }

    //TODO: Add getTitle method

    public function getName() {
        return $this->name;
    }

    //TODO: Add borrowBook method

    public function borrowBook(Book $book) {
        if($book->borrowBook()) {
            echo $this->getName(). " borrowed ". $book->getTitle();
        } else {
            echo $book -> getTitle()." is out of stock. Please check back later";
        }
    }

    //TODO: Add returnBook method

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
