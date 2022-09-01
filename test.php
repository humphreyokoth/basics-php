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
    // echo "Hello World";
    
    // $txt = "Hello World";
    // echo  $txt;

    // Local variable
    // function myTest1(){
    //     $x=5;
    //     echo "<p> Variable x inside function is:$x</p>";
    // }
    // myTest1();


    $x =5;
    $y=10;
    function myTest(){
     $GLOBALS['y'] = $GLOBALS['x']+ $GLOBALS['y'];
    }
    myTest();
    echo $y;
    ?></h1>
</body>
</html>