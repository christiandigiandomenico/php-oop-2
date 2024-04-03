<?php

class PremiumUser extends User
{

    public $subscription;

    function __construct($username, $email, $sconto, $subscription)
    {

        parent::__construct($username, $email, $sconto);

        $this->subscription = $subscription;
    }

    public function setDiscount()
    {

        if ($this->subscription = true) {
            $this->sconto = 20;
        }
    }

    public function getDiscount()
    {
        return $this->sconto;
    }
}
