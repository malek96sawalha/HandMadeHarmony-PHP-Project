<?php
session_start();
require_once 'dbcon.php';

function validate($inputData)
{
    global $conn;
    $validateData = mysqli_real_escape_string($conn, $inputData);
    return trim($validateData);
}

function redirect($url, $status)
{
    $_SESSION['status'] = "$status";
    header('Location: ' . $url);
    exit(0);
}
function invRedirect($url, $status)
{
    $_SESSION['invstatus'] = "$status";
    header('Location: ' . $url);
    exit(0);
}
function alertMessage()
{
    if (isset($_SESSION['status'])) {
        echo '<div class="alert alert-success">
                <h6>' . $_SESSION['status'] . '</h6>
              </div>';
        unset($_SESSION['status']);
    }

}

function validationREGEX()
{
    if (isset($_SESSION['invstatus'])) {
        echo '<span style="color: red;">' . $_SESSION['invstatus'] . '</span>';
        unset($_SESSION['invstatus']);
    }
}

function getAll($tableName)
{
    global $conn;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function chechParamId($paramType)
{
    if (isset($_GET[$paramType])) {
        if ($_GET[$paramType] != null) {
            return $_GET[$paramType];
        } else {
            return 'No ID Given';
        }
    } else {
        return 'No ID Found';
    }
}

function getById($tableName, $id, $colName)
{
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE $colName='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
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

function getByIdJoin($tableName1, $tableName2, $id, $colName)
{
    global $conn;

    $table1 = validate($tableName1);
    $table2 = validate($tableName2);
    $id = validate($id);

    $query = "SELECT * FROM $table1 INNER JOIN $table2 ON $table1.$colName = $table2.$colName";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
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

function deleteQuery($tableName, $id, $colName)
{
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE $colName='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;
}

function logoutSession()
{
    unset($_SESSION['loggedInStatus']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUserData']);
}

function calculateTable($table_name)
{
    global $conn;
    $query = "SELECT COUNT('*') FROM $table_name";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_array($queryRun);
        return $row[0];
    } else {
        return 'Somthing went wrong';
    }
}
function calculateTableForUser($table_name, $id)
{
    global $conn;
    $query = "SELECT COUNT('*') FROM $table_name WHERE user_id=$id";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_array($queryRun);
        return $row[0];
    } else {
        return 'Somthing went wrong';
    }
}
?>