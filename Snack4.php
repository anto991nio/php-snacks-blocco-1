<?php

$arrayNumber=[];

for( $i=0; count($arrayNumber) < 16; $i++){
    $number = rand(1,100);

    if(!in_array($number,$arrayNumber)){
        $arrayNumber[]=$number ;
    }
}

var_dump($arrayNumber)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
        for ($i = 0; $i < count($arrayNumber); $i++) {
            $currentItem = $arrayNumber[$i];
            ?>
            
            <strong><?php echo $currentItem ?></strong>
        
        
            <?php

        }
        ?></h1>
</body>
</html>