# oop-introduction

## The introduction
OOP - Object Orientated Programming - focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

### Exercide N 1
### Classes
Classes are the blueprints of objects.
Class is a programmer-defined data type, which includes local methods and local variables.
Class is a collection of objects. Object has properties and behavior.

Understand how create classes, properties, construct and public function.

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

