<html>
    <head>
        <meta charset="UTF-8">
        <style>
            table {
                border: red solid 3px;
                border-collapse: collapse;
                text-align: center;
            }
            td {
                border: red solid 1px;
                width: 200px;
            }
        </style>
    </head>
    <body>
        <h3>단위 변환기 : 
        <?php
            $num = (float)($_POST["num"]);
            $unit =$_POST["unit"];

            echo $num." ".$unit;

            switch($unit) {
                case "미터(m)":
                    $meter = $num;
                    $inch = $num * 39.370079;
                    $feet = $num * 3.28084;
                    $yard = $num * 1.093613;
                    break;
                case "인치(in)":
                    $meter = $num / 39.370079;
                    $inch = $num;
                    $feet = $num / 12;
                    $yard = $num / 36;
                    break;
                case "피트(ft)":
                    $meter = $num / 3.28084;
                    $inch = $num * 12;
                    $feet = $num;
                    $yard = $num / 3;
                    break;
                case "야드(yd)":
                    $meter = $num / 1.093613;
                    $inch = $num * 36;
                    $feet = $num * 3;
                    $yard = $num;
            }
        ?>
        </h3>
        <table>
            <tr><td><?= round($meter, 4)?> 미터(m)</td><td><?= round($inch, 4)?> 인치(in)</td></tr>
            <tr><td><?= round($feet, 4)?> 피트(ft)</td><td><?= round($yard, 4)?> 야드(yard)</td></tr>
        </table>
    </body>
</html>