<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    protected string $color;
    protected float $price;
    protected string $temperature;

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

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }





}

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent:: __construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @return string
     */
    public function getBeerInfo(): string
    {
        return $this->beerInfo;
    }

    /**
     * @param string $beerInfo
     */
    public function setBeerInfo(string $beerInfo): void
    {
        $this->beerInfo = $beerInfo;
    }
    public function beerInfo(): void
    {
        echo "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a ".$this->getColor()." color.";
    }

}



$duvel = new Beer("Duvel", 8.5, "blond", 3.5);
//echo "<br>";
//echo $duvel->getAlcoholPercentage();
//echo "<br>";
//echo $duvel->getColor();
//echo "<br>";
//$duvel->getInfo();
//echo "<br>";


//TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).


//$duvel->setColor("light");
// echo  $duvel->getColor();


//TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
$duvel->setBeerInfo("Hi i'm Duvel");
echo $duvel->getBeerInfo();
echo $duvel->getAlcoholPercentage();
echo $duvel->getColor();
echo $duvel->beerInfo();