<?php
require_once __DIR__ . "/User.php";
class Premium extends User
{
    protected $premium = false;

    public function __construct($name, $lastname, $mail, $card, $premium)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->mail = $mail;
        $this->card = $card;
        $this->premium = $premium;
        $this->setSconto($premium);
    }


    /**
     * Get the value of premium
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set the value of premium
     *
     * @return  self
     */
    public function setPremium($premium)
    {

        $this->premium = $premium;



        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getSconto()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setSconto($premium)
    {
        if ($premium) {
            $this->discount = 10;
        } else {
            $this->discount = 0;
        }
        return $this;
    }
}
