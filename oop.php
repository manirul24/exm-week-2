<?php
class Book
{
    // TODO: Add properties as Private
    private $title;
   // private $name;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        $this->title = $title;

        $this->availableCopies = $availableCopies;

        // TODO: Initialize properties
    }

    // TODO: Add getTitle method

    public function getTitle()
    {
            
      return  $this->title;       

    }


    // TODO: Add getAvailableCopies method

    public function getAvailableCopies()
    {
      
        return $this->availableCopies;

       

    }

    // TODO: Add borrowBook method
    public function borrowBook()
    {
       

        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            echo "this book {$this->title} not availavle.\n";

        }
    }


    // TODO: Add returnBook method
    public function returnBook()
    {
        $this->availableCopies++;
       

    }
}

class Member {
 // TODO: Add properties as Private
    private $name;

 public function __construct($name) {
     $this->name=$name;
      // TODO: Initialize properties
     }


 // TODO: Add getName method

 public function getName(){
        return $this->name;
 }
 
 // TODO: Add borrowBook method
 
 public function borrowBook(Book $book){

        $book->borrowBook();
       
         echo "{$this->name} has borrowed '{$book->getTitle()}' Available Copies: '{$book->getAvailableCopies()}'.\n";
    
 }

 // TODO: Add returnBook method

  public function returnBook(Book $book){
$book->returnBook();
 echo "{$this->name} has return Book '{$book->getTitle()}' Available Copies: '{$book->getAvailableCopies()} .\n";
    
 }
 
}


// Usage

// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// TODO: Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

$Book1=new Book("The Great Gatsby",'5');
$Book2=new Book("To Kill a Mockingbird",'3');
$member1=new Member("John Doe");
$member2=new Member(" Jane Smith");


$member1->borrowBook($Book1);
$member2->borrowBook($Book2);
//$member2->returnBook($Book2);

echo "Available Copies of ".$Book1->getTitle().': '.$Book1->getAvailableCopies()."\n";
echo "Available Copies of ".$Book2->getTitle().': '.$Book2->getAvailableCopies();



// TODO: Create 2 members with the following properties
//Member 1 - Name: John Doe
//Member 2 - Name: Jane Smith


// TODO: Apply Borrow book method to each member


// TODO: Print Available Copies with their names:

?>