//Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

<?php
    $partite = [
        [
            'squadracasa' => 'Milano',
            'squadraospite' => 'Cantù' ,
            'punticasa' => '55' ,
            'puntiospiti' => '60' ,
        ]
        [
            'squadracasa' => 'Genova' ,
            'squadraospite' => 'Bari' ,
            'punticasa' => '70' ,
            'puntiospiti' => '80' ,
        ]
        [
            'squadracasa' => 'Treviso' ,
            'squadraospite' => 'Palermo' ,
            'punticasa' => '70' ,
            'puntiospiti' => '80' ,
        ]
        
    ]
    for( $i = 0; $i < count($partite) ; $i++){
        echo $partite[&i]['squadracasa'] . '-' . $partite[$i]['squadraospite'] . '|' . $partite[$i]['punticasa'] . '-' . $partite[$i]['puntiospite'];
    };

?>