# oop-introduction

## The introduction
OOP - Object Orientated Programming - focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

### Exercide N 1
### Classes
Classes are the blueprints of objects.

Class is a programmer-defined data type, which includes local methods and local variables.


Class is a collection of objects. Object has properties and behavior.

* Understand how create classes, properties, construct and public function.

Example 
```php
<?php
class Person 
{
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old.";
    }
}
?>
```
---
### Exercide N 2
## Extends
The extends keyword is used to derive a class from another class.

This is called inheritance.

A derived class has all of the public and protected properties of the class that it is derived from.

* To learn make class that extends from another class.

````php
class Student extends Person {
    // inherited from parent class , needs to be defined but should follow the same parameters
    public function sayHello() : string {
        return "Hello! I'm a student and my name is $this->name!";
    }
}
````
-----
### Exercide N 3
## Private
<span style="color:red">**Private**</span> - the property or method can ONLY be accessed within the class
* Make all properties private

````php

// Private

<?php
class Person 
{
    private $name;
    private $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old.";
    }
}
?>

}
````
---
### Exercide N 4
## Protected
<span style="color:red">Protected</span> - the property or method can be accessed within the class and by classes derived from that class

* Make all properties protected

````php
class Person 
{
    protected $name;
    protected $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old.";
    }
}
?>
````
### Exercide N 4
## if  statement 
If statement - executes some code if one condition is true.
````php
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
````