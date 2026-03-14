<?php

use App\Result;
use App\Result2;
use App\Student;
use App\Student2;

require_once __DIR__.'/vendor/autoload.php';


$student1 = new Student();

$student1->name = 'Mahbub';
$student1->email = 'devmahbubmamun@gmail.com';
$student1->address = 'Dhaka';

$result1 = new Result();
$result1->physics = 85;
$result1->math = 90;
$result1->chemistry = 88;
$result1->GetAverage();
$result1->GetPassOrFail();

$student1->result = $result1;


$student2 = new Student();
$student2->name = 'Mahbub Hussain';
$student2->email = 'mahbubhussaincse@gmail.com';
$student2->address = 'Cumilla';

$result2 = new Result();
$result2->physics = 85;
$result2->math = 90;
$result2->chemistry = 88;

$result1->GetAverage();
$result1->GetPassOrFail();

$student2->result = $result2;


$student3 = new Student2();
$student3->name='Mamun';
$student3->email='Mamun@gmail.com';
$student3->address='KowToli';

$result3 = new Result2();
$result3->phy = 60;
$result3->ches = 50;
$result3->math = 60;
$result3->bio = 60;

$student3->result2 = $result3;



function DisplayStudentInfo(Student2 $student2) {
  echo $student2->name . PHP_EOL;
  echo $student2->email . PHP_EOL;
  echo $student2->address . PHP_EOL;
  echo $student2->result2->GetAverage() . PHP_EOL;  
  echo $student2->result2->GetPasOrFail() . PHP_EOL;
}

DisplayStudentInfo($student3);
// DisplayStudentInfo($student2);