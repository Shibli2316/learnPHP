<?php

$score1 = 85;
if($score1 > 20){
    echo 'A';
}elseif($score1 < 90){
    echo 'B';
}else{
    echo 'C';
}
?>

// This can be used when just working with php but when working with html and php to make the code readable we use the following syntax

<html>
    <head>

    </head>
    <body>
        
    <?php $score = 15 ?>
    <?php if($score > 20) :?>
        <strong>A</strong>;
    <?php elseif($score < 90) :?>
        <strong>B</strong>;
    <?php else :?>
        <strong>C</strong>;
    <?php endif ?>
    </body>
</html>