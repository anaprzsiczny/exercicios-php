<?php

use Person\Person;
use Book\Book;

require __DIR__.'/vendor/autoload.php';

$somePerson = new Person("John Doe", "Male", 25);
$otherPerson = new Person("Jane Doe", "Female", 29);
$someOtherPerson = new Person("George R. R. Martin", "Male", 73);

$coolBook = new Book("A Game of Thrones", $someOtherPerson->getName(), 694);
$boringBook = new Book("No one reads me", "Mr. Boring", 150, $somePerson->getName());
$classicBook = new Book("The Little Prince", "Antoine Saint-Exupery", 112, $otherPerson->getName());
$longBook = new Book("Anna Kariênina", "Liev Tolstoi", 950, $otherPerson->getName());

$longBook->browseBook(543);
$boringBook->openBook();

$coolBookDetails = $coolBook->getBookDetails();
$boringBookDetails = $boringBook->getBookDetails();
$classicBookDetails = $classicBook->getBookDetails();
$longBookDetails = $longBook->getBookDetails();

$allBooksDetails = [$coolBookDetails, 
                    $boringBookDetails, 
                    $classicBookDetails, 
                    $longBookDetails
                ];
?>

<h1>This is just like a regular library</h1>
<h2>Check out all the books we have!</h2>

<?php foreach ($allBooksDetails as $book): ?>
    <h3><?php echo $book['title']; ?></h3>
    <ul>
        <li>By <?php echo $book['author'] ?></li>
        <li><?php echo $book['numberOfPages'] ?> pages</li>
        <?php if ($book['isOpen']) : ?>
            <li><?php echo "Book is open, currently at page {$book['currentPage']}" ?></li>
        <?php else : ?>
            <li><?php echo "Book is closed" ?></li>
        <?php endif; ?>
        <?php if ($book['reader'] != null) : ?>
            <li><?php echo $book['reader'] ?> is reading this book.</li>
        <?php endif; ?>
</ul>
<?php endforeach; ?>