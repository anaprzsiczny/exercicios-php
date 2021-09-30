<?php

namespace Book;

use Person\Person;

class Book implements BookInterface
{
    private $title;

    private $author;

    private $numberOfPages;

    private $currentPage = 1;

    private $isOpen = false;

    private $reader;

    public function __construct(string $title, 
        string $author, 
        int $numberOfPages,   
        string $reader = null
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->numberOfPages = $numberOfPages;
        $this->reader = $reader;
    }

    public function getBookDetails()
    {
        $bookDetails = [
            'title' => $this->title,
            'author' => $this->author,
            'numberOfPages' => $this->numberOfPages,
            'currentPage' => $this->currentPage,
            'isOpen' => $this->isOpen,
            'reader' => $this->reader
        ];

        return $bookDetails;
    }

    public function openBook()
    {
        $this->isOpen = true;
    }

    public function closeBook()
    {
        $this->isOpen = false;
    }

    public function browseBook($pageNumber)
    {
        if ($pageNumber > $this->numberOfPages || $pageNumber < 0) {
            echo "This page doesn't exist!";
        } else {
            $this->isOpen = true;
            $this->currentPage = $pageNumber;
        }
    }

    public function nextPage()
    {
        $this->currentPage +=1;
    }

    public function previousPage()
    {
        $this->currentPage -=1;
    }
}