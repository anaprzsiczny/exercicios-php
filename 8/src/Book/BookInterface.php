<?php

namespace Book;

/**
 * This interface defines methods to be implemented on Book Class
 */

interface BookInterface
{
    /**
     * This function opens the book
     *
     * @return boolean
     */
    public function openBook();

    /**
     * This function closes the book
     * 
     * @return boolean
     */
    public function closeBook();

    /**
     * This function moves the current page to a page defined by a parameter
     * 
     * @param int $pageNumber
     * 
     * @return int
     */
    public function browseBook($pageNumber);

    /**
     * This function moves to the next page
     * 
     * @return int
     */
    public function nextPage();

    /**
     * This function moves to the previous page
     * 
     * @return int
     */
    public function previousPage();
}