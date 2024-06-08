<?php

// 1. calcolare l'area di un cerchio di raggio R = 10
function areaCerchio(){
    return pi()*10**2;
}

echo "1) " . areaCerchio() . "\n";
// 2. calcolare l'ipotenusa di un triangolo rettangolo di cateti 3 e 4

function pitagora(){
    return sqrt(3**2 + 4**2);
}

echo "2) " . pitagora() . "\n";

// 3. scrivere una funzione che, assegnati due numeri, generi un numero random, intero, fra i due assegnati (compresi)

function randomBeetwen(int $x, int $y){
    return rand($x,$y);
}

echo "3) " . randomBeetwen(5,17) . "\n";


// 4. scrivere una funzione che trasformi un nome nelle sue iniziali. Ad esempio: "Tizio Caio" => "T. C."

function nameToFirstChar(string $name){
    $array = explode(" ",$name);
    return $array[0][0] . ". " . $array[1][0] . "."; 
}

echo "4) " . nameToFirstChar("Tizio Caio") . "\n";

// 5. scrivere una funzione che assegnati 3 numeri, ritorni true se i tre numeni possono essere i lati di un trianglo, false altrimenti
function isTriangle($x,$y,$z){
    $cond1 = $x < $y + $z && $x > $y - $z;
    $cond2 = $y < $x + $z && $y > $x - $z;
    $cond3 = $z < $y + $x && $z > $y - $x;

    return ($cond1 && $cond2 && $cond3)?"è un triangolo": "non è un triangolo";
}

echo "5) " . isTriangle(5,6,70) . "\n";

// 6. congettura di Collatz: preso un numero naturale maggiore di 1, se questo è pari, dividerlo per due, se dispari, moltiplicarlo per 3 e aggiungere 1. Ripetere. Qualunque sia il numero di partenza, l'algoritmo termina sempre ad 1. Scrivere una funzione che implementi l'algoritmo e ritorni un array con il valore calcolato ad ogni iterazione. Ad esempio 10 => [10,5,16,8,4,2,1]

function Collatz($x){
    $array = [];
    
    while($x != 1){
        if($x % 2 == 0){
            $x /= 2;
            $array[] = $x;
        }else{
            $x = ($x * 3) +1;
            $array[] = $x;

        }   
    }

    print_r($array);
}

echo "6) ";
Collatz(21);
echo "\n";


// 7. Scrivere un programma che stampi tutti i numeri da 1 a 100: per i multipli di 3 stampare JAVA, per i multipli di 5 stampare SCRIPT, infine per i multipli di 3 e 5 stampare JAVASCRIPT

function fizzBuzz(){
    $array = [];

    for($i = 1; $i <= 100; $i++){
        switch($i){
            case $i%15==0: $array[] = "JAVASCRIPT"; break;
            case $i%3==0: $array[] = "JAVA"; break;
            case $i%5==0: $array[] = "SCRIPT"; break;
            default: $array[] = $i;
        }
    }
    print_r($array);
};

echo "7) ";
fizzBuzz();
echo "\n";

// 8. Scrivere una funzione che, assegnato un numero n, ritorni la successione di fibonacci fino all'n-simo numero sotto forma di array, ad esempio 3 => [1,1,2]

function fibonacci($x){
    $array = [1,1];

    switch($x){
        case 1: $array[0]; break;
        case 2: $array; break;
        default:{
            for($i = 1; $i <= $x; $i++){
                $array[] = $array[$i] + $array[$i-1];
            }
        }
    }
    print_r($array);
}

echo "8) ";
fibonacci(20);
echo "\n";

// 9. Scrivere una funzione che, assegnato un numero n, ritorni se è primo
function isPrime($x){
    $array = [];
    for($i = 1; $i <= $x; $i++){
        if($x%$i == 0) $array[] = $i;
    }
    return $x . (count($array) == 2? " è un numero primo":" non è un numero primo");
}

echo "9) " . isPrime(6) . "\n";


// 10. Scrivere una funzione che, assegnata una stringa, ritorni la somma delle cifre in essa presenti

function countString($str){
    $exp_str = explode(" ",$str);
    $somma = 0;

    foreach($exp_str as $value){
        if(is_numeric($value)){
            $somma += $value;
        }
    }


    return $somma;
}

echo "10) " . countString("Questa è 1 stringa da 7 caratteri") . "\n";

// 11. scrivere una funzione che accetta come parametri un array di numeri ed un numero di soglia, e restituisca un array formato dai numeri maggiori della soglia fornita. Ad esempio ([1,2,3,4], 3) => [4]
function greatherThan(array $array, int $limit){
    
    return array_filter($array, function($el) use ($limit){
        return $el > $limit;
    });
}

echo "11) ";
print_r(greatherThan([1,2,3,4],3));
echo "\n";

// 12. scrivere una funzione che trasformi un numero in ore e minuti: ad esempio 3014 => 50:14, devono essere sempre presenti 2 cifre, sia per le ore che per i minuti (non devo leggere, ad esempio 1:9 ma 01:09)
function toHours($num){
    $hours = round($num /60);
    $min = $num % 60;

    if($hours < 10){
        $hours = "0" . $hours;
    }
    if($min < 10){
        $min = "0" . $min;
    }

    return $hours . ":" . $min;
}   

echo "12) " . toHours(3014) . "\n";

// 13. scrivre una funzione che generi un array formato da N numeri random interi, fra un minimo e un massimo assegnati 
function arrayOfRandoms($min, $max, $n){
    $array = [];
    for($i = 0; $i < $n; $i++){
        $array[] = rand($min,$max);
    }
    return $array;
}
echo "13) ";
print_r(arrayOfRandoms(1,10,6));
echo "\n";

// 14. Scrivere una funzione che trasforma un array di array in un oggetto (ogni elemento è una coppia ad esempio [["nome", "Marco"], ["cognome", "russo"]])

function arrayToObj(array $array){
    $object = new stdClass();
    foreach($array as $value){
        $object->{$value[0]} = $value[1];
    }
    return $object;
}

echo "14) ";
print_r(arrayToObj([["nome", "Marco"], ["cognome", "russo"]]));
echo "\n";

// 15. scrivere una funzione che, assegnata una stringa, ritorni un oggetto con chiavi le parole (distinte) e valori la loro frequenza. Ad esempio "Quella cosa affianco alla cosa sulla cosa" => {Quella: 1, cosa: 3, affianco: 1, alla: 1, sulla: 1}

function stringToObject($string){
    $array = explode(" ", $string);
    $obj = new stdClass();
    foreach($array as $value){
        $obj->{$value} = substr_count($string, $value);
    }
    return $obj;
}
echo "15) ";
print_r(stringToObject("Quella cosa affianco alla cosa sulla cosa"));
echo "\n";

// 16. scrivere una funzione che, data una stringa, trasformi la prima lettera di ogni parola in maiuscolo
function capitalize($string){
    $array = explode(" ", $string);
    $array = array_map(function($elem){
        $elem = ucfirst($elem);
        return $elem;
    }, $array);
    return implode(" ", $array);
}

echo "16) " . capitalize("Quella cosa affianco alla cosa sulla cosa") . "\n";

// 17. scrivere una funzione che, assegnata una stringa, ritorni il numero di vocali presenti (gestire le maiuscole)

// 18. Scrivere una funzione che , assegnata una stringa, ne faccia lo slug. Ad esempio: "Sono una stringa" => "/sono-una-stringa"

// 19. Scrivere una funzione che accetta una stringa e  restituisce la parola più lunga

// 20. scrivere una funzione che dato un array, ritorni "pari" o "dispari" a seconda che la somma dei suoi elementi sia pari o dispari

// 21. scrivere una funzione che accetta in ingresso un array di 0 e 1 e restituisca l'equivalente numero in base decimale. Ad esempio [1,0] => 2

// 22. viene assegnata una stringa contenente solo caratteri "x" e "y". Scrivere una funzione che ritorni se il numero di x e y è uguale. Ad esemio, "xxoxoo" => true

// 23. scrivere una funzione che, assegnata una stringa ed una vocale, ritorni la stringa originaria con tutte le vocali cambiate in quella fornita. Ad esempio: "Ciao a tutti, "o" => "Cooo o totto"

// 24. scrivere una funziona che, assegnato un array contenente numeri e stringhe, ritorni un nuvo array formato dai soli numeri. Ad esempio [1,2,"a",4] => [1,2,4]

// 25. scrivere una funzione che inverta una stringa

// 26. scrivere una funzione che accetta un array di numeri e ne ritorni la media e la deviazione standard

// 27. scrivere una funzione che accetti in ingresso un array di numeri, ritornare la somma se questa è pari, altrimenti la media

// 28. scrivere un "programma" che chiaeda all'utente di inserire in numero, lanciare un alert che comunica se il numero è pari o dispari

// 29. scrivere una funzione che assegnato un numero naturale ritorni la somma da uno fino al numero assegnato

// 30. scrivere una funzione che accetti in ingresso due array e ne restituisca il prodotto scalare

// 31. viene fornita una stringa, ritornare un oggetto con chiave il carattere, valore il numero di volte che compare nella tringa. Ad esempio "casa" => {"a"; 2,"c":1, "s":1} in ordine alfabetico

// 32. scrivere una funzione che prende in ingresso un numero intero e ritorna il numero di bit uguali ad 1 nella sua rappresentazione binaria, ad esempio: 42 in binario 101010 => 3

// 33. viene assegnato un array di nomi. Scrivere una funzione che accetta in ingresso l'array ed un numero e ritorni un nuovo array, contenente solo i nomi di lunghezza uguale al numero assegnato, in ordine alfabetico

// 34. scrivere una funzione che ritorni tutti i numeri primi esistenti fino al numero assegnato compreso

// 35. scrivere una funzione che accetta un numero intero e ritorna tutti i suoi divisori. Dopo, trasformale la funzione per verificare se il numero è primo

// 36. scrivere una funzione che accetta in ingresso una stringa (una password) e ritorni true/false se è valida. Per essere valida, la password deve essere lunga almeno 6 caratteri e deve contenere almeno un numero. Nella password non devono esserci caratteri ripetuti

// 37. viene assegnato un array di numeri interi in cui sono presenti in posizioni random un numero ed il suo opposto tranne che per 1 elemento. Scrivere una funzione che ritorna tale elemento. Ad esempio [-3,1,2,3,-1,4,-2] => 4

// 38. Scrivere una funzione che accetta in ingresso un numero e ritorna un numero formato dai quadrati di ogni cifra presente in ingresso. Ad esempio 372 => 9494. Extra farlo in una sola linea

// 39. Scrivere una funzione che unisca due array di numeri, ordinandoli in modo decrescente ed eliminando i duplicati. Ad esempio [2,1] [1,2,3] => [3,2,1]

// 40. Abbiamo una stringa di parole. Ogni parola contiene un numero. Scrivere una funzione che ritorni la stringa ordinata in base al numero presente in ogni parola. Ad esempio "is2 thi1s t4est 3a" => "Thi1s is2 3a t4est"

// 41. Un isogramma è una parola all'interno della quale ogni lettera compare una sola volta, ad esempio "Ciao" ma non "Barca". Scrivere una funzione che determini se una stringa è un isogramma no case sensitive

// 42. Scrivere una funzione che accetta in ingresso due array e ne ritorni la differenza, ovvero il primo array primo degli elementi presenti nel secondo array

// 43. Scrivere una funzione che ritorni i giorni mancanti fino a Natale

// 44. Scrivere una funzione che accetta un array di 10 cifre e restituisca una stringa formattata come un numero di telefono, ad esempio [1,2,3,4,5,6,7,8,9,0] => "(123) 456-7890"

// 45. Viene fornito un array di numeri, tutti uguali tranne uno, Scrivere una funzione che ritorni l'estraneo. Ad esempio [3,3,2,3,3,3,3,3,3] => 2

// 46. Scrivere una funzione che accetta un anno e ritorna i "venerdì 17" presenti in quell'anno sotto forma di array, Extra srivere un'altra funzione che usi la precedente per trovare l'anno con più venerdì 17 dall'anno assegnato fino ad oggi

// 47. Scrivere una funzione che accetta come parametro un numero N e 1.) genera la sequenza di fibonacci di lunghezza N, 2.) calcola il rapporto fra i due termini consecutivi della stessa (i rapporti approssimano la sezione aurea, e li stampa in console), 3.) stampa un array con le differenze fra termini consecutivi dei rapporti

// 48. Scrivere una funzione che, assegnata una stringa, restituisca un oggetto "parola": frequenza, ordinato per frequenza decrescente. Prima di processare la stringa, ripulirla da parole inutili (articoli, preposizioni,...) e punteggiatura

// 49. Scrivere una funzione che accetta come parametro un oggetto di studenti e voti {"Tizio": 5, "Caio": 3}. Calcolare la media dei voti, aumentarla del 10% ed arrotondarla per difetto. Ritornare un oggetto con chiave il nome dello studente, e con valore "Promosso con NN" o "Bocciato con NN", dove NN è il voto dello studente presente nell'oggetto in entrata, a seconda che NN sia maggiore o minore della media modificata

// 50. Dato un numero "prod", cercare due elementi nella successione di fibonacci tali che il loro prodotto sia pari a prod. Se tali elementi esistono, la funzione deve ritornare [F(n), F(n+1), true], altrimenti deve ritornare [F(n), F(n+1), false], dove F(m) è il più piccolo numero di Fibonacci per cui F(m) * F(m+1) > prod. Ad Esempio: productFib(714) => (21,34,true), productFib(800) => (34,55,false).
