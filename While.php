<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    
    <style>
        /* ตกแต่งสไตล์มินิมอลและปรับขนาดให้ตารางใหญ่ขึ้น */
        body { font-family: sans-serif; background: #f0f2f5; display: flex; justify-content: center; padding: 50px; }
        
        /* ขยายขนาดความกว้างของการ์ดจาก 340px เป็น 480px */
        .card { background: white; padding: 35px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 480px; }
        
        /* ปรับช่องกรอกข้อมูลและปุ่มให้ใหญ่ขึ้น */
        input[type="number"] { width: 100%; padding: 12px; margin: 12px 0; box-sizing: border-box; font-size: 16px; border: 1px solid #ccc; border-radius: 6px; }
        input[type="submit"] { width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; }
        input[type="submit"]:hover { background-color: #0056b3; }
        
        /* ปุ่มกลับหน้าหลักสีน้ำเงินปกติ */
        .btn-back { 
            display: inline-block; 
            padding: 8px 16px; 
            background-color: #007bff; 
            color: white; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 14px; 
        }
        .btn-back:hover { background-color: #0056b3; }

        /* สไตล์ตารางสูตรคูณเวอร์ชันขยายใหญ่ */
        table { width: 100%; margin-top: 25px; border-collapse: collapse; text-align: center; font-size: 18px; } /* เพิ่มขนาดฟอนต์เป็น 18px */
        th { background-color: #007bff; color: white; padding: 15px; border-radius: 6px 6px 0 0; font-size: 20px; } /* เพิ่มขนาดหัวตาราง */
        td { padding: 12px; border-bottom: 1px solid #eee; color: #333; } /* เพิ่ม padding ให้แถวสูงขึ้น ดูไม่อึดอัด */
        tr:nth-child(even) { background-color: #f8f9fa; }
    </style>
</head>
<body>

<div class="card">
    <a href="index.php" class="btn-back">index.php</a>

    <h1 style="font-size: 24px; margin-top: 20px;">โปรแกรมคำนวณแม่สูตรคูณ</h1>

    <form action="">
            <label for="" style="font-size: 16px;"> กรุณากรอกแม่สูตรคูณ :</label> 
            <input type="number" name="num" id="" value="<?php echo isset($_GET['num']) ? $_GET['num'] : ''; ?>" required>
            <input type="submit" value="คำนวณ">
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
                    
                    for($i = 1; $i <= 12; $i++){
                        echo "<tr>";
                        echo "<td>" . $num . " x " . $i . "</td>";
                        echo "<td>=</td>";
                        echo "<td style='font-weight: bold; color: #007bff;'>" . ($num * $i) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3' style='color: #aaa; padding: 30px; font-size: 16px;'>กรุณากรอกตัวเลขแล้วกดคำนวณ</td></tr>";
                }   
            ?>
        </tbody>
    </table>
</div>

</body>
</html>