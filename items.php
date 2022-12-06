<?php
class Item{
    public $name;
    public $category;
    public $price;

    function __construct($name, $category, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
      }
}
$items = array(
new Item("Apple","Fruit",3),
new Item("Banana","Fruit",2),
new Item("Peach", "Fruit", 3),
new Item("Broccoli", "Vegetable", 3),
new Item("Kale", "Vegetable", 5),
new Item("Chicken alfredo", "Pasta", 7),
new Item("Pie", "Dessert", 4)
);
?>