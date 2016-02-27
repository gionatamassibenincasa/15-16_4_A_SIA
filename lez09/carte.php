<?php
    $carta = array(1, 'Cuori');
    
    $carte = array(
        array(1, 'Cuori'),
        array(3, 'Fiori'),
        array(2, 'Picche')
    );
    
    echo "La carta in pos. 3 &egrave un ". 
    $carte[2][0] . " di " . $carte[2][1] . ".";
?>