<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// ejemplo variables
$msj = "welcome to php. I Llove php";


/*
// ejemplo condicional if

if($a <= $b){

}else{

}
// ejemplo case
$c = 0;
switch ($c) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

// y and o
($a == $b) && ($a > $c); //y
($a == $b) || ($a > $c); //o
!($a == $b) && ($a > $c);//negacion

// ciclo for 
for ($i=0; $i <=10 ; $i++) { 
    # code...
}*/
// ciclo foreach para correr arrays
$names = ['ana','jesus','maria'];
foreach ($names as $key => $name) {
    echo $key.'-'.$name . '<br>';
}

// ciclo wile
while ($a <= 10) {
    # code...
}

// ciclo do while



?>
    
</body>
</html>