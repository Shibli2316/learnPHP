<?php

// while  ---- can use to break out of the loop. It has a default argument of number of breaks like break 2
$i = 0;
while($i <= 15){
    echo $i++;
}
echo '<br />';


// do-while
$a = 0;
do{
    echo $a++;
}while($a < 10);
echo '<br />';



// for
for($z = 0; print $z, $z<15; $z++){
    echo $z;
}
echo '<br />';


// fpr each
$programingLanguages = ['java', 'python', 'php'];
foreach($programingLanguages as $key => $lang){
    echo $key . ' : ' .$lang . '<br />';
}

// the variable in foreach loop is not destroyed and remains even after the scope is over. Use unset to destroy it. Use implode or json encoder to convert array so that we can iterate