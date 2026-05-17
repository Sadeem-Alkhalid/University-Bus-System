
<?php

$selected_seat = 5;
$total_seats = 20;

if($selected_seat > 0 && $selected_seat <= $total_seats)
{
    echo "Seat reservation is valid.";
}
else
{
    echo "Invalid seat number.";
}

?>