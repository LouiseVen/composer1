<?php 
namespace App;
class hello {

    public function speak(): string {
        return 'Hello World';
    }

    public function __toString()
    {
        return $this->speak();
    }
}