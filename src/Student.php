<?php
declare(strict_types=1);
namespace App;

class Student
{
    public string $name;
    public string $email;
    public string $address;
    public ?Result $result=null;// student has a result Composition Has-A Relationship
}
