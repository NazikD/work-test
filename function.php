<?php
include 'db-conn.php';

// функция подключает к базе данных
function connect()
{
    $conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8');
    return $conn;
}


function select($query)
{
    global  $conn;
    $query_ressult = [];
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row[] = mysqli_fetch_assoc($result)) {
            $query_ressult = $row;
        }
    }
    return $query_ressult;
};



// $sql_types = "SELECT * FROM types";
// $result = mysqli_query($conn, $sql_types);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     $res = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $res[] = $row;
//     }
// } else {
//     echo "0 results";
// };







// $types = $_GET['type'];
// $sql_tipe_id = "SELECT * FROM marks WHERE tipe_id = $types";
// $result_2 = mysqli_query($conn, $sql_tipe_id);

// if (!empty($_GET['type'])) {
//     if (mysqli_num_rows($result_2) > 0) {
//         // output data of each row
//         $res_2 = [];
//         while ($row = mysqli_fetch_assoc($result_2)) {
//             $res_2[] = $row;
//         }
//     } else {
//         echo "0 results";
//     };
// }





// $marks = $_GET['mark'];
// $sql_mark_id = "SELECT * FROM models WHERE mark_id = $marks";
// $result_3 = mysqli_query($conn, $sql_mark_id);

// if (!empty($_GET['mark'])) {
//     if (mysqli_num_rows($result_3) > 0) {
//         // output data of each row
//         $res_3 = [];
//         while ($row = mysqli_fetch_assoc($result_3)) {
//             $res_3[] = $row;
//         }
//     } else {
//         echo "0 results";
//     };
// }





// $types = [
//     'legkovi',
//     'vantazhni',
//     'asdsadas'
// ];

// $models = [
//     'legkovi' => ['a', 'b'],
//     'vantazhni' => ['c', 'd'],
//     'asdsadas' => ['e', 'f']
// ];

// $marks = [
//     'a' => ['1', '2'],
//     'b' => ['3', '4'],
//     'e' => ['5', '6'],
//     'f' => ['7', '8'],
//     'c' => ['9', '0'],
//     'd' => ['10', '11']
// ];


// $numbs = [
//     '1' => ['5', '6'],
//     '2' => ['7', '8']
// ];

// var_dump($_GET);

// mysqli_close($conn);
