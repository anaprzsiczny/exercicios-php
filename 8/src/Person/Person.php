<?php

namespace Person;

class Person
{
    private $name;

    private $gender;

    private $age;

    public function __construct(string $name, string $gender, int $age)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function birthday()
    {
        $this->age +=1;
        return $this->age;
    }
}