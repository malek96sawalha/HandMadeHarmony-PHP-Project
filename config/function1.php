<?php 
// session_start();
require_once 'dbcon.php';

function validate($inputData) {
    global $conn;
    $validateData =  mysqli_real_escape_string($conn, $inputData);
    return trim($validateData);
}

function redirect($url, $status) {
    $_SESSION['status'] = "$status";
    header('Location: '.$url);
    exit(0);
}

function alertMessage(){
    if(isset($_SESSION['status'])){
        echo '<div class="alert alert-success">
                <h6>'.$_SESSION['status'].'</h6>
              </div>';
        unset($_SESSION['status']);
    }
}

function getAll($tableName){
    global $conn;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function chechParamId($paramType) {
    if(isset($_GET[$paramType])) {
        if($_GET[$paramType] != null) {
            return $_GET[$paramType];
        } else {
            return 'No ID Given';
        }
    } else {
        return 'No ID Found';
    }
}

function getById($tableName, $id, $colName) {
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE $colName='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result) {
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
            'status' => 200,
            'message' => 'Fected data',
            'data' => $row
            ];
            return $response;
        } {
            $response = [
            'status' => 404,
            'message' => 'No Data Record'
            ];
            return $response;
        }
    } else {
        $response = [
            'status' => 500,
            'message' => 'Somthing Went Wrong'
        ];
        return $response;
    }
}

function deleteQuery($tableName, $id, $colName){
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE $colName='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;
}

function logoutSession() {
    unset($_SESSION['loggedInStatus']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUserData']);
}
?>