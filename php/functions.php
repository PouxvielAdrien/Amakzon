<?php

function displayWeapons( array $arrayOfWeapons) {
    foreach ($arrayOfWeapons as $weapon){
        if (array_key_exists('enable', $weapon) && $weapon['enable'])
        {
            return "<br>".'The weapon : '. $weapon['name'] . ' is available and costs ' . $weapon['price']. ' $' ;
        }
        else{
            return "<br>".'The weapon : '. $weapon['name'] . ' is NOT available';
        }
    }
}
