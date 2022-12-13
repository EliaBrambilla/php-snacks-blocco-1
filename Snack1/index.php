//Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

<?php
$game = [
    [
        `teamhome` => `Napoli`,
        `teamguest` => `Inter`,
        `pointhome` => `55`,
        `pointguest` => `30`,
    ],
    [
        `teamhome` => `Genova`,
        `teamguest` => `Bari`,
        `pointhome` => `70`,
        `pointguest` => `25`,
    ],
    [
        `teamhome` => `Lazio`,
        `teamguest` => `Venezia`,
        `pointhome` => `90`,
        `pointguest` => `60`,
    ]
];
for ( $i =0; $i < count($game); $i++) {
    echo $game[$i]['teamhome'] . '-' . $game[$i]['teamguest'] . '|' . $game[$i]['pointhome'] . '-' . $game[$i]['pointguest'];
}
?>