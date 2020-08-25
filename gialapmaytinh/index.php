<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Giả Lập Máy Tính</title>
</head>
<body>
    <?php
        $txtNum1 = '';
        $txtOperator = '';
        $txtNum2 = '';
        if(isset($_POST['txtNum1']) && isset($_POST['txtOperator']) && isset($_POST['txtNum2'])){
            $txtNum1 = $_POST['txtNum1'];
            $txtOperator = $_POST['txtOperator'];
            $txtNum2 = $_POST['txtNum2'];
        }
    ?>
    <div class="container">
        <h1 class="title">Chương Trình giả lập máy tính</h1>
        <div class="box-form">
            <form action="" method="POST" name="frmTinhToan">
                <table>
                    <tr>
                        <td>Nhập số thứ nhất: </td>
                        <td><input type="text" name="txtNum1" id="txtNum1" value=<?php echo $txtNum1; ?>></td>
                    </tr>
                    <tr>
                        <td>Nhập phép tính: </td>
                        <td><input type="text" name="txtOperator" id="txtOperator" value=<?php echo $txtOperator; ?>></td>
                    </tr>
                    <tr>
                        <td>Nhập số thứ hai: </td>
                        <td><input type="text" name="txtNum2" id="txtNum2" value=<?php echo $txtNum2; ?>></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><button name="btnTinh" id="btnTinh" value="Tính">Tính toán</button></td>
                    </tr>
                </table>
               <br>
            </form>
        </div>
        <div class="ketqua">
            <?php 
                
                $result = 0;
                if(is_numeric($txtNum1)&&is_numeric($txtNum2))
                    $flag = false;
                else
                    $flag = true;
                if(!$flag){
                    switch($txtOperator){
                        case '+':
                            $result = $txtNum1 + $txtNum2;
                        break;
                        case '-':
                            $result = $txtNum1 - $txtNum2;
                        break;
                        case '*':
                        case 'x':
                            $result = $txtNum1 * $txtNum2;
                        break;
                        case '/':
                        case ':':
                            $result = $txtNum1 / $txtNum2;
                        break;
                        case '%':
                        case 'mod':
                        case 'Mod':
                            $result = $txtNum1 % $txtNum2;
                        break;
                        case '//';
                        case 'div';
                        case 'Div';
                            $result = (int)($txtNum1 / $txtNum2);
                        break;
                        default:
                            $flag = true;
                    }
                }
                if(!$flag){
                    echo "{$txtNum1} {$txtOperator} {$txtNum2} = {$result}";
                }
                else{
                    echo "Không thể tính toán";
                }
            
            ?>
        </div>
    </div>
</body>
</html>