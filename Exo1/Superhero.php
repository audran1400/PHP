<?php
class Superhero
{
    private $name;
    private $identity;
    private $colors;

    public function __construct($name, $identity, $colors)
    {
        $this->name =$name;
        $this->identity=$identity;
        $this->colors=$colors;
    }


    public function __set($attr, $value)
    {
        if(property_exists(get_class($this),$attr))
            $this->$attr =$value;
        else
            throw new Exception("La propriété n'existe pas.");
    }
    public function __toString()
    {
        return $this->name." ".$this->identity." ".$this->colors;
    }
}

