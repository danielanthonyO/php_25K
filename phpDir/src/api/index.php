<?php include 'DBConnect.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$objectDB = new DBConnect;
$conn = $objectDB->connect();
var_dump($conn);

// print_r(file_get_contents('php://input'));
//echo "Testing local API";
//phpinfo();

$user = file_get_contents('php://input');
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "INSERT INTO users(id, name, email, mobile, created_at, updated_at) VALUES(null, :name, :email, :mobile, :created_at,:updated_at)";

        $stmt = $conn->prepare($sql);
        $created_at = date('Y-m-d');
        $updated_at = date('Y-m-d');
        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':mobile', $user->mobile);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':updated_at', $updated_at);

        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record created successfully'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to create a record'];
        }
        echo json_encode($response);
        break;

        case "GET":
            $sql = "SELECT * FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($users);
            break;
}









// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

// // echo "Testing local API";
// $objectDB = new DbConnect;
// $conn = $objectDB->connect();
// // var_dump($conn);
// // echo "Connected to DB";


// // print_r(file_get_contents("php://input"));
// $user = file_get_contents('php://input');
// $method = $_SERVER['REQUEST_METHOD'];

// // create a new user
// switch ($method) {
//     case "POST":
//         $user = json_decode(file_get_contents('php://input'));
//         $sql = "INSERT INTO users(id, name, email, mobile, created_at, updated_at) VALUES(1, Daniel, dan@mail, 080346352, :created_at, :updated_at)";
//         // create a prepared statement
//         $stmt = $conn->prepare($sql);
//         $created_at = date('Y-m-d');
//         $updated_at = date('Y-m-d');
//         $stmt->bindParam(':name', $user->name);
//         $stmt->bindParam(':email', $user->email);
//         $stmt->bindParam(':mobile', $user->mobile);
//         $stmt->bindParam(':created_at', $created_at);
//         $stmt->bindParam(':updated_at', $updated_at);

//         if ($stmt->execute()) {
//             $response = ['status' => 1, 'message' => 'Record created successfully'];
//         } else {
//             $response = ['status' => 0, 'message' => 'Failed to create a record'];
//         }
//         echo json_encode($response);
//         break;
// }

// phpinfo();
