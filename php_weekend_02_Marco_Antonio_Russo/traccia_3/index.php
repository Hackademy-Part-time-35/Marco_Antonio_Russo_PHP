<?php
require_once("./Ironman.php");
require_once("./Dummy.php");
require_once("./Armors/Armor.php");
require_once("./Armors/Helmets/Model1_Helmet.php");
require_once("./Armors/Arms/Model1_Arm.php");
require_once("./Armors/Chests/Model1_Chest.php");
require_once("./Armors/Legs/Model1_Leg.php");
require_once("./Armors/Helmets/Model2_Helmet.php");
require_once("./Armors/Arms/Model2_Arm.php");
require_once("./Armors/Chests/Model2_Chest.php");
require_once("./Armors/Legs/Model2_Leg.php");


$armor1 = new Armor(new HelmetModel1,new ArmModel1,new ArmModel1, new ChestModel1,new LegModel1, new LegModel1);
$ironman = new IronMan($armor1);

$armor2 = new Armor(new HelmetModel2,new ArmModel2,new ArmModel2, new ChestModel2,new LegModel2, new LegModel2);
$ironman2 = new IronMan($armor2);

// print_r($armor1);
// print_r($armor2);

// print_r($ironman);
// print_r($ironman2);

echo "Sono stati creati un totale di " . IronMan::$instance . " Ironman!\n";

$dummy = new Dummy();

echo "\n ========= IRONMAN 1 ========= \n";
$ironman->attack($dummy); //attacco normale con percentuale di critico del 10%

$ironman->powerUp(40);
$ironman->attack($dummy); //attacco dopo powerUp

echo "\n ========= IRONMAN 2 ========= \n";

$ironman2->attack($dummy); //attacco normale con percentuale di critico del 10%

$ironman2->powerUp(40);
$ironman2->attack($dummy); //attacco dopo powerUp


print_r($ironman2->componentStats);

