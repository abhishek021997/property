<?php
// Default SQL query to fetch all rooms
 
$type_sel = $_POST['Roomtype']; // Default value for type selection

if ($type_sel == 'single') {
    $type_gen = $_POST['Gender'];
    if ($type_gen == 'boys'){
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = 'single' AND gender = 'boys'";
    } else {
        $sql_stud_filt = "SELECT id,images, videos, price, gender, details,  FROM MyGuests WHERE type = 'single' AND gender = 'girls'";
    }

} elseif ($type_sel == '1RK') {
    $type_gen = $_POST['Gender'];
    if ($type_gen == 'boys'){
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '1RK' AND gender = 'boys'";
    } else {
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '1RK' AND gender = 'girls'";
    }
}elseif ($type_sel == 'shared') {
    $type_gen = $_POST['Gender'];
    if ($type_gen == 'boys'){
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = 'shared' AND gender = 'boys'";
    } else {
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = 'shared' AND gender = 'girls'";
    }
} elseif ($type_sel == '1BHK') {
    $type_gen = $_POST['Gender'];
    if ($type_gen == 'boys'){
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '1BHK' AND gender = 'boys'";
    } else {
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '1BHK' AND gender = 'girls'";
    }
} elseif ($type_sel == '2BHK') {
    $type_gen = $_POST['Gender'];
    if ($type_gen == 'boys'){
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '2BHK' AND gender = 'boys'";
    } else {
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '2BHK' AND gender = 'girls'";
    }
} elseif ($type_sel == '3BHK') {
    $type_gen = $_POST['Gender'];
    if ($type_gen == 'boys'){
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '3BHK' AND gender = 'boys'";
    } else {
        $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests WHERE type = '3BHK' AND gender = 'girls'";
    }
}
else {
    $sql_stud_filt = "SELECT id, images, videos, price, gender, details,  FROM MyGuests";
}

?>