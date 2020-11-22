<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class TestSubObject
{
    /**
     * 
     *
     * @var string|null
     */
    protected $foo = 'subContent';
    /**
     * 
     *
     * @return string|null
     */
    public function getFoo() : ?string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string|null $foo
     *
     * @return self
     */
    public function setFoo(?string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}