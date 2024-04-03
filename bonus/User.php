<?php


class User
{

    protected $username;
    protected $email;
    protected $password;
    protected $sconto;

    function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}

$user1 = new User("Giannino27", "giann@gmail.com", "12345", 0);
