<?php

function formatDate($m, $y) {
    switch ($m) {
        case 1:
            return "JAN/" . substr($y, -2);
            break;
        case 2:
            return "FEV/" . substr($y, -2);
            break;
        case 3:
            return "MAR/" . substr($y, -2);
            break;
        case 4:
            return "ABR/" . substr($y, -2);
            break;
        case 5:
            return "MAI/" . substr($y, -2);
            break;
        case 6:
            return "JUN/" . substr($y, -2);
            break;
        case 7:
            return "JUL/" . substr($y, -2);
            break;
        case 8:
            return "AGO/" . substr($y, -2);
            break;
        case 9:
            return "SET/" . substr($y, -2);
            break;
        case 10:
            return "OUT/" . substr($y, -2);
            break;
        case 11:
            return "NOV/" . substr($y, -2);
            break;
        case 12:
            return "DEZ/" . substr($y, -2);
            break;
    }
}
