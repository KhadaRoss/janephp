<?php

namespace Docker\Api\Model;

class PluginDevice
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string[]
     */
    protected $settable;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSettable() : array
    {
        return $this->settable;
    }
    /**
     * 
     *
     * @param string[] $settable
     *
     * @return self
     */
    public function setSettable(array $settable) : self
    {
        $this->settable = $settable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
}