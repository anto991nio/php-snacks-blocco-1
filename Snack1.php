<!-- Snack 1 Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<?php
$teambasket = [
    [
        "squadraCasa" => "Anderson Packers",
        "squadraOspite" => "Oklahoma Thunder",
        "puntiCasa" => rand(1, 100),
        "puntiOspiti" => rand(1, 100),

    ],
    [
        "squadraCasa" => "G.S. Warriors",
        "squadraOspite" => " L.A. Lakers",
        "puntiCasa" => rand(1, 100),
        "puntiOspiti" => rand(1, 100),

    ],
    [
        "squadraCasa" => "San Antonio Spurs",
        "squadraOspite" => "Dallas Mavericks",
        "puntiCasa" => rand(1, 100),
        "puntiOspiti" => rand(1, 100),

    ],
    [
        "squadraCasa" => "Utah Jazz",
        "squadraOspite" => "Portland T. Blazers",
        "puntiCasa" => rand(1, 100),
        "puntiOspiti" => rand(1, 100),

    ],
    [
        "squadraCasa" => "Phoenix Suns",
        "squadraOspite" => "Seattle S.Sonics",
        "puntiCasa" => rand(1, 100),
        "puntiOspiti" => rand(1, 100),

    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        for ($i = 0; $i < count($teambasket); $i++) {
            $currentItem = $teambasket[$i];
            $squadre = $currentItem["squadraCasa"] ." ". "VS" ." ". $currentItem["squadraOspite"];
            $punteggio=$currentItem["puntiCasa"] ." ". "-" ." ". $currentItem["puntiOspiti"];
            ?>
            <li>
            <strong><?php echo $squadre ?></strong>
            <small><?php echo $punteggio ?></small>
            </li>
            <?php

        }
        ?>

    </ul>
</body>

</html>