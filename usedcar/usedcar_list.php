<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>중고차 검색 결과</title>
        <style>
            table {
                border: 2px solid black;
                border-collapse: collapse;
                text-align: center;
            }
            td {
                border: 1px solid black;
                width: 80px;
                padding: 0 10px;
            }
            #th {
                background-color: yellow;
                font-weight: bold;
            }
            .rightalign {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h3>중고차 검색 결과</h3>
        <?php
            $name = $_POST["name"];
            $distance = $_POST["distance"];
            $color = $_POST["color"];
            $sort = $_POST["sort"];

            $con = mysqli_connect("localhost", "user1", "12345", "sample");

            $name_sql = "model_name = '$name'";

            switch ($distance) {
                case ("1"):
                    $distance_sql = "mileage <= 50000";
                    break;
                case ("2"):
                    $distance_sql = "mileage >= 50000 and mileage <= 100000";
                    break;
                case ("3"):
                    $distance_sql = "mileage >= 100000";
            }

            if ($color == "기타") {
                $color_sql = "color <> '흰색' and color <> '회색' and color <> '검정'";
            }
            else {
                $color_sql = "color = '$color'";
            }

            switch ($sort) {
                case "1":
                    $sort_sql = "order by mileage";
                    break;
                case "2":
                    $sort_sql = "order by mileage desc";
                    break;
                case "3":
                    $sort_sql = "order by price";
                    break;
                case "4":
                    $sort_sql = "order by price desc";
            }

            if ($name == "전체" && $distance == "전체" && $color == "전체") {
                $sql = "select * from usedcar ".$sort_sql;
            }
            else {
                $sql = "select * from usedcar where ";
                if ($name != "전체") {
                    $sql .= $name_sql;
                    if ($distance != "전체" or $color != "전체") {
                        $sql .= " and ";
                    }
                }
                if ($distance != "전체") {
                    $sql .= $distance_sql;
                    if ($color != "전체") {
                        $sql .= " and ";
                    }
                }
                if ($color != "전체") {
                    $sql .= $color_sql;
                }
                $sql .= " ".$sort_sql;
            }

            $result = mysqli_query($con, $sql);
            $num_match = mysqli_num_rows($result);

            echo "검색된 중고차는 {$num_match}대 입니다.<br><br>";

            echo "<table>";
            if ($num_match) {
                echo "<tr id='th'><td>모델</td><td>연식</td><td>주행 거리</td><td>색상</td><td>가격</td></tr>";
            }
            while ($row = mysqli_fetch_row($result)) {
                $model_name = $row[2];
                $make_year = $row[3];
                $mileage = $row[4];
                $color = $row[5];
                $price = $row[6];
                echo "<tr><td>$model_name</td><td>$make_year</td><td class='rightalign'>{$mileage}km</td><td>$color</td><td class='rightalign'>{$price}만원</td></tr>";
            }
            echo "</table>";
        ?>
        <br>
        <button onclick="history.go(-1);">검색으로 돌아가기</button>
    </body>
</html>