<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esercizio 4</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    
<x-navbar />

{{$slot}}

<x-footer />
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://kit.fontawesome.com/a1bce7f071.js" crossorigin="anonymous"></script>
</body>
</html>