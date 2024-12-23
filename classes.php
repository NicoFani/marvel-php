<?php

declare(strict_types=1);

class SuperHero
{
  // Promoted properties
  public function __construct(readonly public string $name, readonly public array $powers, readonly public string $planet) {}

  public function attack()
  {
    return "$this ->name ataca con sus poderes";
  }

  public function show_all()
  {
    return get_object_vars($this);
  }

  public function description()
  {
    $powers = implode(", ", $this->powers);
    return "$this->name es del planeta $this->planet y tiene los siguientes poderes: $powers";
  }

  public static function random()
  {
    $names = ["Thor", "Ironman", "Hulk", "Spiderman", "Capitan America"];
    $powers = [
      ["Volar", "Fuerza", "Rayos X", "Invisibilidad", "Velocidad"],
      ["Telepatía", "Telequinesis", "Regeneración", "Control del tiempo", "Control del clima"],
      ["Fuerza", "Velocidad", "Invisibilidad", "Rayos X", "Volar"],
      ["Volar", "Fuerza", "Rayos X", "Invisibilidad", "Velocidad"],
      ["Fuerza", "Velocidad", "Invisibilidad", "Rayos X", "Volar"]
    ];
    $planets = ["Asgard", "Tierra", "Júpiter", "Marte", "Venus"];

    $name = $names[array_rand($names)];
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    return new self($name, $power, $planet);
  }
}

$hero = SuperHero::random(); // De esta forma accedemos a los metodos estaticos

echo $hero->description();
