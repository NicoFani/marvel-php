<?php

declare(strict_types=1); // Para que PHP sea más estricto con los tipos de datos, se activa a nivel de archivo

function render_template(string $template, array $data = [])
{
  extract($data); // Convierte las claves de un array asociativo en variables
  require "templates/$template.php";
}

function get_data(string $url): array
{
  $result = file_get_contents($url); // Si solo quieres hacer un GET de una API
  $data = json_decode($result, true);
  return $data;
}

function get_until_message(int $days): string
{
  return match (true) {
    $days === 0 => "¡Hoy se estrena!",
    $days === 1 => "¡Mañana se estrena!",
    $days < 7   => "En menos de una semana se estrena 📅",
    $days < 30  => "En menos de un mes se estrena 📅",
    $days < 0   => "Ya se estrenó",
    default     => "En $days días se estrena 📅"
  };
}
