<?php

/** Post class
 * @author antonio  antonio@gmail.com
 * @copyright 2021 antonio
 */

class Post {
    public $title;
    public $category;
    public $author;

    function __construct(string $title,string $category,string $author)
    {
        $this -> title = $title;
        $this -> category = $category;
        $this -> author = $author;
    }
}