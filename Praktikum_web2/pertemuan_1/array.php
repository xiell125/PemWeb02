<?php
// array index
$animals =['kambing', 'kucing', 'ayam'];

// akses array
foreach($animals as $animal){
    echo $animal. '<br>';
}

// array asosiatif
$student = [
    'name' => 'Rahman Hakim',
    'major' => 'informatics',
    'age' => 18
];

echo $student['name'];