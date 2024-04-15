<?php

    $homeTeams = 
    [
        "homeTeam" => "Dolomiti Energia Trentino", "Carpegna Prosciutto Pesaro", "NutriBullet Treviso Basket", "UNAHOTELS Reggio Emilia", "Virtus Segafredo Bologna", "Germani Brescia", "Generazione Vincente Napoli Basket", "Givona Scafati Basket",
    ];

    $homePoints = 
    [
        83, 89, 89, 74, 93, 90, 88, 102,
    ];

    $guestTeams = 
    [
        "guestTeam" => "Bertram Berthona Tortona", "Estra Pistoia", "EA7 Emporio Armani Milano", "Happy Casa Brindisi", "Vanoli Basket Cremona", "Umana Reyez Venezia", "Banco di Sardegna Sassari", "Openjobmetis Varese",
    ];
    
    $guestPoints =
    [
        81, 82, 91, 66, 85, 84, 79, 90, 
    ];


    var_dump($homeTeams);
    var_dump($guestTeams);
    // ciclo for per far ciclare all'interno degli array i nomi delle squadre di casa e quelle ospiti
    // ciclo for per far ciclare all'interno degli array per i punti
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Calendario partire di Basket:</h1>
    <?php echo $homeTeams[0] ?> - <?php echo $guestTeams[0]?> | <?php echo $homePoints[0]  ?>-<?php echo $guestPoints[0] ?>
</body>
</html>