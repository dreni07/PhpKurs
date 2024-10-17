<?php

$cars = array(
array(
    'Bmw','Gjermani',200
),
array(
    'Ferari','Itali',999
),
array('Golf 2','Holande',2)
);

echo "Emri:". $cars[0][0] . " Origjina:". $cars[0][1] . ' Kosto:' . $cars[0][2] . ":Qmimi" . '<br>';
echo "Emri:". $cars[1][0] . " Origjina:". $cars[1][1] . ' Kosto:' . $cars[1][2] . ":Qmimi" . '<br>';
echo "Emri:". $cars[2][0] . " Origjina:". $cars[2][1] . ' Kosto:' . $cars[2][2] . ":Qmimi" . '<br>';

for($row = 0;$row<count($cars);$row++){
    echo "Row Number $row" . '<br>';
    echo '<ul>';
    for($column = 0;$column<count($cars[$row]);$column++){
        $the_row = $cars[$row][$column];
        echo '<li>'.$the_row.'</li>';
    }
    echo '</ul>';
}


$phones = [['Iphone 14',20,10],['Iphone 13',20,20],['Iphone 12',20,25],['Iphone 11',25,40]];

echo '<table>';
for($i = 0;$i<count($phones);$i++){
    echo '<tr>';
    for($j = 0;$j<count($phones[$i]);$j++){ // 
        echo '<td>'.$phones[$i][$j].'</td>';
    }
    echo '</tr>';
}
echo '</table>';

$tabela = array(
    array(1,2,3),
    array(1,2,3),
    array(1,2,3)
);

for($i = 1;$i<4;$i++){
    for($j = 1;$j<4;$j++){
        echo "Array $i Elementi $j";
    }
}

echo '<br>';

for($i = 0;$i<4;$i++){
    for($j = 0;$j<$i;$j++){
        echo '*';
    }
    
    echo '<br>';
}


$notat = array(
    "Matematik"=>5,
    "Fizik"=>5,
    "Biologji"=>3,
    "TIK"=>5
);

foreach($notat as $landa=>$nota){
    echo "Landa: $landa Nota:$nota".'<br>';
}


for($k = 0;$k<=4;$k++){
    for($j = 4;$j>=$k;$j-=1){
        echo "&nbsp";
    }
    for($i = 0;$i<=$k;$i++){
        echo '*';
        echo ' ';
        
    }
    echo '<br>';
}

for($i = 0;$i<5;$i++){
    for($j = 0;$j<$i;$j++){
        echo '*';
    }
    echo '<br>';
    if($i === 4){
        for($k = $i;$k>=0;$k--){
            for($l = 1;$l<$k;$l++){
                echo '*';
            }
            echo '<br>';
        }
        
    }
    
}



// given an array of n input
// go and return an array only with the elements
// that dont have the duplicates in there
// function returningWithoutDuplicates($list){
//     $array_with_unique = [];
//     for($i = 0;$i<count($list);$i++){
//         $array_before = [];
//         $array_after = [];
//         if($i > 0){
//             for($j = $i - 1;$j>=0;$j--){
//                 array_push($array_before,$list[$j]);
//             }
//         }
//         if($i < count($list) - 1){
//             for($k = $i + 1;$k<count($list);$k++){
//                 array_push($array_after,$list[$k]);
//             }
//         }
       

//         if(!(in_array($list[$i],$array_before)) && !(in_array($list[$i],$array_after))){
//             array_push($array_with_unique,$list[$i]);
//         }
//     }

//     return $array_with_unique;
// }

// print_r(returningWithoutDuplicates(['Dren','Dren','Ylli']));




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>