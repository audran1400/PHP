<?php
class Human
{
    private $identity;
    

    public function __construct($identity)
    {
        $this->identity=$identity;
    }


    public function __set($attr, $value)
    {
        if(property_exists(get_class($this),$attr))
            $this->$attr =$value;
        else
            throw new Exception("La propriété n'existe pas.");
    }

    public function __get($property)
    {
        if(property_exists(get_class($this),$attr))
        $this->$attr =$value;
    else
        throw new Exception("La propriété n'existe pas.");
    }

    public function __toString()
    {
        return $this->identity;
    }
}

