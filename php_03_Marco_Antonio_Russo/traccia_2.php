<?php
include("./Student.php");

$student1 = new Student("Marco", "Russo");
$student2 = new Student("Mario", "Rossi");
$student3 = new Student("Miriam", "Bianchi",[2,6,10]);
$student4 = new Student("Panzerotto", "Panzerottoli",[10]);

// Studente 1 con valori vuoti
echo "=========================\n";
echo  "I voti di $student1->name sono i seguenti: ";
print_r($student1->scores);
echo "\n";
echo "=========================";

// Studente 2 con valori pushati con il metodo
echo "=========================";
echo "\n";
$student2->pushScore(6.5);
echo  "I voti di $student2->name sono i seguenti: ";
print_r($student2->scores);
echo "\n";
echo "e la media dei suoi voti è: ";
print_r($student2->average);
echo "\n";
echo "=========================";


// Studente 3 con valori dichiarati al momento dell'inizializzazione
echo "=========================";
echo "\n";
echo "la media dei voti di $student3->name è: ";
print_r($student3->average);
echo "\n";
echo "=========================";

echo "=========================";

// Studente 4 con valori sia dichiarati al momento dell'inizializzazione sia pushati successivamente
echo "\n";
$bestName = $student4->name . " " . $student4->surname;
$student4->pushScore(10,8,7.2,9.5,10);
echo  "I voti di $bestName sono i seguenti: ";
print_r($student4->scores);
echo "e la media dei suoi voti è: ";
print_r($student4->average);
echo "\n";
echo "=========================";

