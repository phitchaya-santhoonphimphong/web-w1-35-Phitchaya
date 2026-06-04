<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo"<h1 style='color:blue'> งานที่ 1 พิชญะ ศาลทูลพิมพ์พงษ์ BIT.2/4 เลขที่ 35</h1>";
    ?>

    <form action="">
        <label for="">เลขเเม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">
        <input type="submit" value="คำนวน">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณเเม่" . $num;

            
        }
    ?>



</body>
</html>