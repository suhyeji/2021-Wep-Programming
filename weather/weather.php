<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>수도권 날씨예보</title>
    </head>
    <body>
        <h3>수도권 날씨예보</h3>
        <form name="city_form" method="post" onchange="document.city_form.submit();">
            <select name="city">
                <option value="과천">과천</option>
                <option value="서울">서울</option>
                <option value="성남">성남</option>
                <option value="수원">수원</option>
                <option value="용인">용인</option>
                <option value="인천">인천</option>
            </select>
            의 날씨는?
        </form>
        <?php
            if (isset($_POST["city"])) {
                $city = $_POST["city"];
            }
            else {
                $city = "과천";
            }
        ?>
        <script> 
            document.city_form.city.value = '<?=$city?>';
            document.city_form.city.focus(); 
        </script>
        <?php
            echo "<h3>{$city}의 날씨</h3>";

            $connect = mysqli_connect("localhost", "user1", "12345", "sample");
            $sql = "select * from weather where city='$city'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($result);

            $high_temp = $row["high_temp"];
            $low_temp = $row["low_temp"];
            $rain_ratio = $row["rain_ratio"];
            $rain_mm = $row["rain_mm"];

            echo "최고 기온 {$high_temp}도<br>";
            echo "최저 기온 {$low_temp}도<br>";
            echo "비올 확률 {$rain_ratio}%<br>";
            echo "예상 강수량 {$rain_mm}mm";
        ?>
    </body>
</html>