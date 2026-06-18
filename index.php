<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 1 - โปรแกรมแม่สูตรคูณ</title>
    
    <style>
        /* จัดวางโครงสร้างหน้าเว็บและธีมมินิมอล */
        body { font-family: sans-serif; background: #f0f2f5; display: flex; justify-content: center; padding: 50px; }
        
        /* กล่องการ์ดข้อความ ขยายขนาดใหญ่ขึ้นให้อ่านง่าย */
        .card { background: white; padding: 35px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 480px; }
        
        /* ปุ่มลิงก์ไปหน้า While.php (เปลี่ยนเป็นปุ่มสีน้ำเงินปกติ) */
        .btn-link { 
            display: inline-block; 
            padding: 8px 16px; 
            background-color: #007bff; 
            color: white; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 14px; 
            margin-bottom: 20px;
        }
        .btn-link:hover { background-color: #0056b3; }

        /* ปรับแต่งช่องกรอกข้อมูลและปุ่มคำนวณให้ใหญ่เต็มตา */
        input[type="number"] { width: 100%; padding: 12px; margin: 12px 0; box-sizing: border-box; font-size: 16px; border: 1px solid #ccc; border-radius: 6px; }
        input[type="submit"] { width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; }
        input[type="submit"]:hover { background-color: #0056b3; }
        
        /* สไตล์ตารางสูตรคูณขนาดใหญ่ */
        table { width: 100%; margin-top: 25px; border-collapse: collapse; text-align: center; font-size: 18px; }
        th { background-color: #007bff; color: white; padding: 15px; border-radius: 6px 6px 0 0; font-size: 20px; }
        td { padding: 12px; border-bottom: 1px solid #eee; color: #333; }
        tr:nth-child(even) { background-color: #f8f9fa; } /* สลับสีแถว */
    </style>
</head>
<body>

<div class="card">
    
    <?php
        echo "<h1 style='color:#007bff; font-size: 20px; margin-top: 0; margin-bottom: 15px;'>งานที่ 1 พิชญะ ศาลทูลพิมพ์พงษ์ BIT.2/4 เลขที่ 35</h1>";
    ?>

    <a href="While.php" class="btn-link">While Loop</a>

    <form action="">
        <label for="" style="font-size: 16px; font-weight: bold; color: #555;">เลขแม่สูตรคูณ</label>
        <input type="number" name="num" id="" value="<?php echo isset($_GET['num']) ? $_GET['num'] : ''; ?>" required>
        <input type="submit" value="คำนวน">
    </form>

    <table>
        <thead>
            <tr>
                <th colspan="3">
                    <?php 
                        if(isset($_GET["num"])){
                            echo "สูตรคูณแม่ " . $_GET["num"];
                        } else {
                            echo "ตารางสูตรคูณ";
                        }
                    ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET["num"])){
                    $num = $_GET["num"];

                    //.เริ่มต้น สิ้นสุด เพิ่มทีละ 1
                    for($i = 1; $i <= 12; $i++){
                        echo "<tr>";
                        echo "<td>" . $num . " x " . $i . "</td>";
                        echo "<td>=</td>";
                        echo "<td style='font-weight: bold; color: #007bff;'>" . ($num * $i) . "</td>";
                        echo "</tr>";
                    }

                } else {
                    // ถ้ายังไม่มีการกดคำนวณ ให้ขึ้นข้อความแนะแนวทางไว้ในตาราง
                    echo "<tr><td colspan='3' style='color: #aaa; padding: 30px; font-size: 16px;'>กรุณากรอกตัวเลขแล้วกดคำนวน</td></tr>";
                }
            ?> 
        </tbody>
    </table>

</div>

</body>
</html>