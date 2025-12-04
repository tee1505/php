<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Array (เรียนวันที่ 4/12/2568)</title>
</head>
<body>
    <h1> ทอสอบ Array แบบ Indexed Array </h1>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    
    <hr> <h1> ทอสอบ Array แบบ Associative Array </h1>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43" , "Mon"=>"25");
    echo "Peter is " . $age['Peter'] . " years old." . "<br>\n"; 
    echo "Ben is " . $age['Ben'] . " years old." . "<br>\n"; 
    echo "Joe is " . $age['Joe'] . " years old." . "<br>\n";
    echo "Joe is " . $age['Mon'] . " years old." . "<br>\n";
    ?>
    <h1>การใช้งาน For กับ Index Arrays </h1>
    <?php
    $fruits = array("แอปเปิ้ล", "มะละกอ", "กล้วย", "ส้ม" , "องุ่น","มังคุด","ทุเรียน");
    $arrlength = count($fruits);

    for($x = 0; $x < $arrlength; $x++) {
        echo $fruits[$x];
        echo "<br>\n";
    }
    ?>
</body>
</html>
