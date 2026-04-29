<?php
$grade = 'H';

// if($grade == 'A'){
//     echo 'You did great';
// } elseif($grade == 'B'){
//     echo 'You did good';
// } elseif($grade == 'C'){
//     echo 'You did okay';
// } elseif($grade == 'D'){
//     echo 'You did alright';
// } elseif($grade == 'E'){
//     echo 'You did poorly';
// }elseif($grade == 'F'){
//     echo 'You did badly';
// }

switch($grade){
    case 'A':
        echo 'You did great';
        break;
    case 'B':
        echo 'You did good';
        break;
    case 'C':
        echo 'You did Okay';
        break;
    case 'D':
        echo 'You did alright';
        break;
    case 'E':
        echo 'You did poorly';
        break;
    case 'F':
        echo 'You did badly';
        break;
    default:
    echo 'Invalid grade';
    break;
}

?>