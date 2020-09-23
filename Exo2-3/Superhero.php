<?php
class Superhero extends human
{
    private $name;
    private $colors;

    public function __construct($name, $identity, $colors)
    {
        parent::__construct($identity);
        $this->name =$name;
        $this->colors=$colors;
    }


 
    public function __toString()
    {
        return $this->name." ".parent::__toString()." ". implode(',' , $this->colors);
    }

    public static function affichage($list)
    {
        $tab=[];
        foreach ($list as $v) {
            $tab[]= new Superhero($v["name"],$v["identity"],$v["colors"]);
           
        }
        return $tab;
    }
}

