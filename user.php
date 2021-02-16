<?php

/** User class
 * @author antonio  antonio@gmail.com
 * @copyright 2021 antonio
 */

class User {
    public $name;
    public $last_name;
    public $username;
    public $password;

    public function __construct(string $name,string $last_name,string $username,string $password)
    {
        $this -> name = $name;
        $this -> last_name = $last_name;
        $this -> username = $username;
        $this -> password = $password;
    }
}