<?php 
    class Card 
    {
        protected $name;
        protected $number;
        protected $date;
        protected $cvc;

        public function __construct($name,$number,$date,$cvc)
        {
            $this->name = $name;
            $this->number = $number;
            $this->date = $date;
            $this->cvc = $cvc;
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
        public function setName($name)
        {
                $this->name = $name;

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
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get the value of cvc
         */ 
        public function getCvc()
        {
                return $this->cvc;
        }

        /**
         * Set the value of cvc
         *
         * @return  self
         */ 
        public function setCvc($cvc)
        {
                $this->cvc = $cvc;

                return $this;
        }
    }
