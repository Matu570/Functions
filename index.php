<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    // Functions:
    // Definition:
    function nameFunction(){
        echo "<h3>This is a function and i am calling it";
    };
    // calling:
    nameFunction();

    echo "<hr>";
    function multiplicationTable($number){
        echo "Multiplication table of $number. <br>";
        echo "<table border='1'> <tr>";
            echo "<th>Table of $number</th>";
        echo "</tr>";
        for($n=1;$n<=10;$n++){
            echo "<tr><td>$number x $n = ".($number*$n)."</td></tr>";
        };    
        echo "</table>";
    };
    if (isset($_GET ['number'])) {
        multiplicationTable($_GET['number']);
    } else{
        echo "There are no numbers to multiply";
    }
    
    // Functions with required parameters.
    echo "<hr>";
    function calcultator($num1, $num2){
        echo "The sum of $num1 + $num2 = ".($num1+$num2)."<br>";
        echo "The subtraction of $num1 - $num2 = ".($num1-$num2)."<br>";
        echo "The multiplication of $num1 x $num2 = ".($num1*$num2)."<br>";
        echo "The division of $num1 / $num2 = ".($num1/$num2)."<br>";
    };
    calcultator(10,5);

    // Functions with optional parameters or with default parameters.
    echo "<hr>";
    function calcultator2($num1, $num2, $defaultParameter="This is the end"){
        echo "The sum of $num1 + $num2 = ".($num1+$num2)."<br>";
        echo "The subtraction of $num1 - $num2 = ".($num1-$num2)."<br>";
        echo "The multiplication of $num1 x $num2 = ".($num1*$num2)."<br>";
        echo "The division of $num1 / $num2 = ".($num1/$num2)."<br>";
        echo $defaultParameter;
    };
    calcultator2(10,5/*Is not necesary enter a parameter here*/);

    // Functions with return
    echo "<hr>";
    function functionReturn($name){
        return "<h2>$name</h2>";
    };
    echo functionReturn("Matías Bueno");

    // Nested functions
    echo "<hr>";
    function getName($name, $lastName){
        $messaje="The name is $name $lastName";
        return $messaje;
    };
    function showName($name, $lastName){
        $message=getName($name, $lastName);
        return $message;
    };
    echo showName("Matias", "Bueno");

    // Global variables:
    echo "<hr>";
    $year = 2022;
    function showYear(){
        global $year;
        return "We are in the year $year";
    };
    echo showYear();

    // Functions variables
    echo "<hr>";
    function morning(){
        return "Hello! Good morning";
    };
    function afternoon(){
        return "Hello! Good afternoon";
    };
    function night(){
        return "Hello! Good night";
    };

    $greeting="afternoon";
    echo $greeting();


    // Predefined functions
    echo "<hr>";
    $variableExample ="This is a example";
    var_dump($variableExample);
    echo "<hr>";

    echo date('d-m-Y');
    echo "<hr>";

    echo time();
    echo "<hr>";

    // (Mathematical functions):
    // Square root
    echo "The square root of 10 is ".sqrt(10);
    echo "<hr>";

    // Random number
    echo "This are random numbers between 10 and 40 is ".rand(10,40);
    echo "<hr>";

    // Pi number
    echo "The pi number is ".pi();
    echo "<hr>";

    // Round out
    echo "Round out 7.934344 -> ".round(7.934344, 2);
    echo "<hr>";

    // Data types:
    echo gettype(45);
    echo "<hr>";

    // Check if a variable is of a type or other type:
    if(is_string("string")){
        echo "This is a string";
    } else {
        echo "This is not a string";
    };
    
    //Check if a variable exists
    echo "<hr>";
    if(isset($edades)){
        echo "The variable exist";
    }else{
        echo "The variable dont exist";
    };

    // Clean or delete spaces
    echo "<hr>";
    $nameWithSpaces="   name    ";
    var_dump(trim($nameWithSpaces)); 
    
    // Delete variables or array indexes
    echo "<hr>";
    $variableDelete="date";
    unset($variableDelete);
    // echo $variableDelete show a error;

    // Check if a variable is empty
    echo "<hr>";
    $text="";
    if(empty($text)){
        echo "The variable text is empty";
    }

    // Check the lenght of a string
    echo "<hr>";
    echo strlen($nameWithSpaces);

    // Find the index of a character
    echo "<hr>";
    echo strpos($nameWithSpaces,"n");

    // Replace words
    echo "<hr>";
    $nameWithSpaces=str_replace("name", "lastname",$nameWithSpaces);
    echo $nameWithSpaces;

    // Change to lowecase and uppercase
    echo "<hr>";
    echo strtoupper($nameWithSpaces);
    echo strtolower($nameWithSpaces);
    ?>
</body>
</html>