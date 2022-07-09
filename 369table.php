<head>
  <meta charset="UTF-8">
</head>
<style>
    table { 
        border-collapse: collapse;
        border: solid 3px; 
    }
    td { 
        width: 50px;
        border: solid 0.5px;
        text-align: center; 
    }
</style>

<h3>3-6-9 테이블</h3>
<table>
<?php
    echo "<tr>";
    for ($i = 0; $i <= 999; $i++) {
        if ($i % 3 == 0) {
            echo "<td style='background-color: cyan; color: red; font-weight: bold;'>$i</td>";
        }
        elseif ((int)($i / 100) == 3 || (int)($i / 100) == 6 || (int)($i / 100) == 9 || 
                (int)(($i % 100) / 10) == 3 || (int)(($i % 100) / 10) == 6 || (int)(($i % 100) / 10) == 9 ||
                $i % 10 == 3 || $i % 10 == 6 || $i % 10 == 9) {
            echo "<td style='background-color: yellow; color: blue; font-weight: bold;'>$i</td>";
        }
        else {
            echo "<td>$i</td>";
        }

        if (($i + 1) % 10 == 0)
            echo"</tr><tr>";
    }
    echo "</tr>";
?>
</table>