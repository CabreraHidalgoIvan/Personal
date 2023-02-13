<?php

$totalPrice = 0;

$menu = [
  "FirstPlate" => [
    "Omelette" => [
      "price" => 5,
      "img" => "img.jpg"
    ],
    "Pizza" => [
      "price" => 7,
      "img" => "img.jpg"
    ],
    "Hamburguer" => [
      "price" => 8,
      "img" => "img.jpg"
    ]
  ],
  "SecondPlate" => [
    "Rice" => [
      "price" => 4,
      "img" => "img.jpg"
    ],
    "Salad" => [
      "price" => 6,
      "img" => "img.jpg"
    ],
    "Meat" => [
      "price" => 5,
      "img" => "img.jpg"
    ],
    "Fish" => [
      "price" => 7,
      "img" => "img.jpg"
    ],
    "Vegetables" => [
      "price" => 3,
      "img" => "img.jpg"
    ]
  ],
  "Dessert" => [
    "Ice Cream" => [
      "price" => 3,
      "img" => "img.jpg"
    ],
    "Cake" => [
      "price" => 4,
      "img" => "img.jpg"
    ],
    "Fruit" => [
      "price" => 2,
      "img" => "img.jpg"
    ]
  ]
];


foreach ($menu as $key => $value) {
  echo "<h1>" . $key . "</h1>";

  foreach ($value as $key => $value) {
    echo "<h2>" . $key . "</h2>";
    echo "<p>Price: " . $value["price"] . "</p>";
    echo "<img src='" . $value["img"] . "'>";
    $totalPrice += $value["price"];
  }
}

echo "<h1>Total Price: " . $totalPrice*0.8 . " with 20% discount</h1>";