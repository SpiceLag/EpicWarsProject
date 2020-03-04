<?php 

namespace entities\Skills;

class Type {
    private $name;
    private $description;
    private $subtype;

    public function __construct($name, $description, $subtype)
    {
        $this->name = $name;
        $this->description = $description;
        $this->subtype = $subtype;
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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of subtype
     */ 
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set the value of subtype
     *
     * @return  self
     */ 
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }
}
