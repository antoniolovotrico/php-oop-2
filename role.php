<?php

/** Role class
 * @author antonio  antonio@gmail.com
 * @copyright 2021 antonio
 */

class Role extends User {
    public $role;
    public $write_permission;

    public function __construct(string $name,string $last_name,string $username,string $password,string $role,string $write_permission)
    {
        parent::__construct($name, $last_name, $username, $password);
        $this -> name = $name;
        $this -> last_name = $last_name;
        $this -> username = $username;
        $this -> password = $password;
        $this -> role = $role;
        $this -> write_permission = $write_permission;
    }
}

?>