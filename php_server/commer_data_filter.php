<?php
// Default SQL query to fetch all rooms
 
$type_sel = $_POST['rentfor']; // Default value for type selection

if ($type_sel == 'stall') {

    $sql_comm_filt = "SELECT id, images, videos, price, types, details,  FROM MyGuests WHERE type = 'stall'";

} elseif ($type_sel == 'shop') {
    
    $sql_comm_filt = "SELECT id, images, videos, price, types, details,  FROM MyGuests WHERE type = 'shop'";
    
} elseif ($type_sel == 'library') {
    
    $sql_comm_filt = "SELECT id, images, videos, price, types, details,  FROM MyGuests WHERE type = 'library'";

}
else {
    $sql_comm_filt = "SELECT id, images, videos, price, types, details,  FROM MyGuests";
}

?>