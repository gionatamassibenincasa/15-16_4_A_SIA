<?php
    $carta = array('valore' => 1,
                   'seme' => 'Cuori');
    
    $carte = array(
        array('valore' => 1, 'seme' => 'Cuori'),
        array('valore' => 3, 'seme' => 'Fiori'),
        array('valore' => 2, 'seme' => 'Picche')
    );
    
    echo "La carta in pos. 3 &egrave un ". 
    $carte[2]['valore'] . " di " . $carte[2]['seme'] . ".";
?>