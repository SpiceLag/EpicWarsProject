<?php

namespace entities\Skills;

class Skill {
    private $name = " ";
    private $description = " ";
    private $type = " ";
    private $subtype = " ";

    public function __construct($name, $type, $subtype, $description)
    {
        $this->name = $name;
        $this->type = $type;
        $this->subtype = $subtype;
        $this->description = $description;
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
     * Get the value of subtype
     */ 
    public function getSubType()
    {
        return $this->subtype;
    }

    /**
     * Set the value of subtype
     *
     * @return  self
     */ 
    public function setSubType($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }
}
