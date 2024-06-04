<?php

include("./Company.php");

$azienda1 = new Company(
    "Aulab",
    "IT",
    30,
    1600,
);
$azienda2 = new Company(
    "BMW",
    "DET",
    300,
    2000,
);
$azienda3 = new Company(
    "Ferrero",
    "IT",
    500,
    1700,
);
$azienda4 = new Company(
    "Nintendo",
    "JP",
    151,
    3000,
);
$azienda5 = new Company(
    "Inchiosto di Puglia",
    "IT",
    0,
    200,
);

$azienda1->consoleStamp();
$azienda5->consoleStamp();

$azienda1->stampCost(2);

Company::howManyCompanies();

print_r(Company::$costPerYear);
echo Company::printAllCosts();