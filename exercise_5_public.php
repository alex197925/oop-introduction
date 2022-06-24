<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage {
    private string $color;
    private float $price;
    private string $temperature;

    /**
     * @param string $color
     * @param float $price
     */
    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "Cold";
    }
    public function getInfo (): void
    {
        echo "This beverage is $this->temperature and $this->color";
    }


    public function changePrice (float $newprice){
         if ($newprice < 0) {
            return $this->price;
   }
          $this->price = $newprice;
    }



    public function getPrice (): float
    {
        return $this->price;
    }
}

$cola = new Beverage("black", 2);
//$beverage->temperature = "hot";
//echo $cola->getInfo();
echo $cola->changePrice(3.5);
echo $cola->getPrice();