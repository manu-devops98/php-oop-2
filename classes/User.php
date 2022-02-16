<?php
class User
{
    protected $name;
    protected $lastname;
    protected $age;
    protected $number;
    protected $mail;
    protected $shoppingCart = [];

    public function __construct($name, $lastname, $mail)
    {
        try {
            $this->setName($name);
            $this->lastname = $lastname;
            $this->mail = $mail;
        } catch (Exception $error) {
            throw new Exception($error->getMessage());
        }
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        if (!is_string($name)) {
            throw new Exception('Nome non valido');
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge(int $age)
    {
        if (!is_int($age)) {
            throw new Exception('Inserire età corretta!');
        }
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of shoppingCart
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * Set the value of shoppingCart
     *
     * @return  self
     */
    public function setShoppingCart(array $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;

        return $this;
    }
}
