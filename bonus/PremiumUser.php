<?php

class PremiumUser extends User
{

    public $subscription;

    function __construct($username, $email, $sconto, $subscription)
    {

        parent::__construct($username, $email, $sconto);

        $this->subscription = $subscription;
    }

    public function setPassword($newPassword)
    {

        if ($subscription = true) {
            $sconto = 20;
        }
    }
}
