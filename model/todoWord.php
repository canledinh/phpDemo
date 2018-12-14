<?php
function add($name, $status, $startDate, $endDate){
    global $db;
    $query = "INSERT INTO todoWord(name, status, startDate, endDate) VALUES('$name', '$status', '$startDate', '$endDate')";
    $actionQuery = $db->exec($query);
}
function edit($id, $name, $status, $startDate, $endDate){
    global $db;
    $query = "UPDATE todoWord SET name = '$name', status = '$status', startDate = '$startDate', endDate = '$endDate' WHERE id = '$id'";
    $actionQuery = $db->exec($query);
}
function del($id){
    global $db;
    $query = "DELETE FROM todoWord WHERE id = $id";
    $actionQuery = $db->exec($query);
}
function listAll(){
    global $db;
    $query = "SELECT * FROM todoWord";
    $actionQuery = $db->query($query);
    $result = $actionQuery->fetchAll();
    return $result;
}
function listDetail($id){
    global $db;
    $query = "SELECT * FROM todoWord WHERE id=$id";
    $actionQuery = $db->query($query);
    $result = $actionQuery->fetch();
    return $result;
}
function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}
?>