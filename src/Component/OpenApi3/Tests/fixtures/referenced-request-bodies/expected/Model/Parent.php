<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Parent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var Child[]
     */
    protected $child;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return Child[]
     */
    public function getChild() : array
    {
        return $this->child;
    }
    /**
     * 
     *
     * @param Child[] $child
     *
     * @return self
     */
    public function setChild(array $child) : self
    {
        $this->initialized['child'] = true;
        $this->child = $child;
        return $this;
    }
}