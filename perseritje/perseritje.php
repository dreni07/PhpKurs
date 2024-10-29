<?php 
    # Declaring A Variable
    $school = "Digital School";
    echo "I Love $school 3";

    $x = 5;
    $y = 10;

    # Using Arithmetic Expressions
    echo $x + $y;
    echo $x - $y;
    echo $x * $y;
    echo $x / $y;
    echo '<br>';
    echo $x % $y;

    // Concatinate a string

    $a = 'Dren';
    $b = 'Llazani';
    $c = $a . $b;
    echo "\nMy Name Is $c\n";
    echo '<br>';
    // replacing a string

    $the_alias = 'Dreni Is Not A Good Programmer';
    echo str_replace('Not','',$the_alias);
    echo '<br>';
    // Counting Words Of A String

    $the_word = 'Dreni Is A New Programmer With Zero Experience';
    echo str_word_count($the_word);
    echo '<br>';
    // the string length which means counting the characters

    $the_str = 'Blerta Is Our Teacher';
    echo strlen($the_str);

    // reversing a string
    $stringu = 'dren si nerd';
    echo strrev($stringu);

    // Lesson 3
    $num = -5;
    if($num < 0){
        echo "$num Is Less Than 0";
    }

    // print number from 1 to 10

    $numri = 1;
    while($numri <= 10){
        echo "Numri Eshte $numri <br>";
        $numri++;
    }

    // do while loop
    $z = 1;
    do{
        echo "The Number Is $z <br>";
        $z++;
    }while($z <= 10);

    // print from one to 10

    for($i = 1;$i<=10;$i++){
        echo "The Number Is $i <br>";
    }


    // print every element in the array 
    
    $cars = array('Audi','Bmw','Mercedes');
    foreach($cars as $car){
        echo "The Car Saved Is $car <br>";
    }

    //




?>