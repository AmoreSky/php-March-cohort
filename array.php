<?php
// $student_1 = 'Ademola';
// $student_2 = 'Ademola';
// $student_3 = 'Ademola';
// $student_4 = 'Ademola';
// $student_5 = 'Ademola';
// $student_6 = 'Ademola';

// $students = ['Lola', 'Kola', 'Sola', 'Tola', 'Bola'];

// $students = array('Lola', 'Kola', 'Sola', 'Tola', 'Bola');
// echo $students[0];

// // array_shift($students);

// // $students[3] = 'Fola';

// $popped = array_pop($students);
// print_r("Popped: $popped");

// foreach($students as $item){
//     echo "Student's name is  $item  <br>";
//     // echo 'hi';
// }

// $students=[
//     'name' => 'Anthonia',
//     'age' => '90',
//     'email' => 'tonia@mail.com'
// ];

// foreach($students as $key => $value){
//     echo "{$key}: {$value}<br>";
//     // echo 'hi';
// }

// print_r($students);
// print_r($students['name']);
// echo $students['name'];

$students = [
    [
    'name' => 'Ademola',
    'age' => 70,
    'email' => 'mola@gmail.com'
    ],
    [
        'name'=> 'Adekola',
        'age'=>'65',
        'email'=> 'kola@gmail.com'
    ],
    [
        'name'=> 'Adebola',
        'age'=>'65',
        'email'=> 'bola@gmail.com'
    ],
    [
        'name'=> 'Adesola',
        'age'=>'30',
        'email'=> 'sola@gmail.com'
    ],
    [
        'name'=> 'Adelola',
        'age'=>'49',
        'email'=> 'lola@gmail.com'
    ],
    [
        'name'=> 'Adetola',
        'age'=>'50',
        'email'=> 'ola@gmail.com'
    ]

]; 

// echo $students[4]['email'];

foreach($students as $student_info){
    echo "My name is {$student_info['name']} I am {$student_info['age']} and my email address is {$student_info['email']} <br>";
};



?>