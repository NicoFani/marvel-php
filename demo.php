<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Incializar una nueva sesión de cURL; ch = curl handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición y guardar la respuesta en una variable; 
   curl_exec() devuelve false si la petición falla */
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

var_dump($data);
?>

<main>
  <h2>La proxima pelicula de Marvel</h2>
</main>