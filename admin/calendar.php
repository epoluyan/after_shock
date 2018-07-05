<?php
function get_calendar() {
    $dayofmonth = date('t');
    $day_count = 1;
    $num = 0;
    for ($i = 0; $i < 7; $i++) {
        $dayofweek = date('w',
            mktime(0, 0, 0, date('m'), $day_count, date('Y')));
        $dayofweek = $dayofweek - 1;
        if ($dayofweek == -1) $dayofweek = 6;

        if ($dayofweek == $i) {
            $week[$num][$i] = $day_count;
            $day_count++;
        } else {
            $week[$num][$i] = "";
        }
    }
    while (true) {
        $num++;
        for ($i = 0; $i < 7; $i++) {
            $week[$num][$i] = $day_count;
            $day_count++;
            if ($day_count > $dayofmonth) break;
        }
        if ($day_count > $dayofmonth) break;
    }

    echo "<div class='container'>";
    echo "<h2>Календарь бронирования</h2>";
    for ($i = 0; $i < count($week); $i++) {
        echo "<div class='row'>";
        for ($j = 0; $j < 7; $j++) {
            if (!empty($week[$i][$j])) {
                if ($j == 5 || $j == 6)
                    echo "<button class='col-sm-1 calendar-col'><span style='color:red'>" . $week[$i][$j] . "</span></button>";
                else echo "<button class='col-sm-1 calendar-col'>" . $week[$i][$j] . "</button>";
            } else echo "<button class='col-sm-1 calendar-col'>&nbsp;</button>";
        }
        echo "</div>";
    }
    echo "</div>";

}
?>