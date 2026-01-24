<?php

use App\Result;
use App\Student;


require_once __DIR__.'/vendor/autoload.php';


$student1 = new Student();

$student1->name = 'Mahbub';
$student1->email = 'devmahbubmamun@gmail.com';
$student1->address = 'Dhaka';

$result1 = new Result();
$result1->physics = '85';
$result1->math = '90';
$result1->chemistry = '88';
$result1->GetAverage();
$result1->GetPassOrFail();

$student1->result = $result1;


$student2 = new Student();
$student2->name = 'Mahbub Hussain';
$student2->email = 'mahbubhussaincse@gmail.com';
$student2->address = 'Cumilla';

$result2 = new Result();
$result2->physics = '85';
$result2->math = '90';
$result2->chemistry = '88';

$result1->GetAverage();
$result1->GetPassOrFail();

$student2->result = $result2;



function DisplayStudentInfo($student1) {
  echo $student1->name . PHP_EOL;
  echo $student1->email . PHP_EOL;
  echo $student1->address . PHP_EOL;
  echo $student1->result->GetAverage() . PHP_EOL;  
  echo $student1->result->GetPassOrFail() . PHP_EOL;
}

DisplayStudentInfo($student1);
DisplayStudentInfo($student2);