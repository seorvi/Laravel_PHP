@extends('disseny')

@section('content')

<h1>Correo</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hora del treballador</title>
</head>
<body>
    <h1>horari treballador</h1>
    <p>l'usuari es diu: {{ $usuari->nom_cognoms }}</p>
    <p>hora d'entrada: {{ darrere_hora_entrada }}</p>
</body>
</html>