<?php

echo "<div class='act32'>";
for ($n = 1; $n < 7; $n++) {
    echo "<div>";
    for ($c = 1; $c < 7; $c++) {
        echo "<span>";
        if ($c == 1) {
            echo str_pad($n*$c, 2, " ", STR_PAD_LEFT);
        } else {
            echo str_pad($n*$c, 4, " ", STR_PAD_LEFT);
        }
        echo "</span>";
    }
    echo "</div>";
}
echo "</div>";