<?php

namespace entities;

class Weapon {
    private $name = "";
    private $type = "";
    private $forClass = "";

    public function __construct($name, $type, $forClass){
        $this->name = $name;
        $this->type = $type;
        $this->forClass = $forClass;
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
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of forClass
     */ 
    public function getForClass()
    {
        return $this->forClass;
    }

    /**
     * Set the value of forClass
     *
     * @return  self
     */ 
    public function setForClass($forClass)
    {
        $this->forClass = $forClass;

        return $this;
    }
}
