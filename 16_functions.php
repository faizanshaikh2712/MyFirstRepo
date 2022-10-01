<?php
echo "PHP Functions <br>";


// At first function is just defined and will be ignored
// processMarks naam ka functions is being defined
// $sammer and $surya will copy into $marksArr
// and then the function will run
// and return into $sum




function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
      $sum += $value;
    }
    return $sum;
}

$sameer = [78, 66, 56, 64, 87];
$surya = [98, 86, 56, 34, 23];

$sumMarks = processMarks($sameer);
$sumMarksSurya = processMarks($surya);

echo "Total marks scored by sameer is $sumMarks <br>";
echo "Total marks scored by surya is $sumMarksSurya <br>";




function avgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$student1  = [43, 34, 56, 75, 23];
$sumMarks = avgMarks($student1);
echo "Average Marks of Student 1 is $sumMarks";



function NewFunction($variable)
{
    $sum = 0;
foreach ($variable as $value) {
    $sum += $value;
}
 return $sum;
}

$player1 = [23, 44, 56, 74, 23];
$player1marks = NewFunction($player1);
echo "Marks $player1marks";

?>