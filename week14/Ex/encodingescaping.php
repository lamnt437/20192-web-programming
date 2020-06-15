<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = <<< End
"Stop pulling my hair!" Jane's eyes flashed.<p>
End;

echo "Input before escaping: " . $input;

$double = htmlentities($input);
echo "Input after escaping: " . $double;

$both = htmlentities($input, ENT_QUOTES);
echo "Input escaping with ent_quotes: " . $both;

$neither = htmlentities($input, ENT_NOQUOTES);
echo "Input escapeing with ent_noquotes: " . $neither;
