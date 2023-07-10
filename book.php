<?php
class Book {
    private $title;
    private $author;
    private $isbn;

    public function __construct($title, $author, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getISBN() {
        return $this->isbn;
    }
}

class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }
}

// Create some book objects
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "978-0743273565");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", "978-0061120084");
$book3 = new Book("1984", "George Orwell", "978-0451524935");

// Create a library object
$library = new Library();

// Add books to the library
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Get all the books from the library
$books = $library->getBooks();

// Display the books
foreach ($books as $book) {
    echo "Title: " . $book->getTitle() . "\n";
    echo "Author: " . $book->getAuthor() . "\n";
    echo "ISBN: " . $book->getISBN() . "\n";
    echo "\n";
}
?>
