<?php
include './../config/database.php';
include './../model/todoWord.php';

if(isset($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action=$_POST['action'];
}
switch ($action){
    case 'add':
        if(isset($_POST['action'])){
            $wordName = $_POST['txtWordName'];
            $status = $_POST['status'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            add($wordName, $status, $startDate, $endDate);
            redirect('index.php?action=list');
        }
        include '../view/add.php';
        break;
        
        
    case 'edit':
        $id = $_GET['id'];
        if(isset($_POST['action'])){
            $wordName = $_POST['txtWordName'];
            $status = $_POST['status'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            edit($id, $wordName, $status, $startDate, $endDate);
            redirect('index.php?action=list');
        }else{
            $sp = listDetail($id);
            include '../view/edit.php';
        }
        break;
        
    case 'list':
        $sps = listAll();
        include '../view/list.php';
        break;
    case 'delete':
        $id = $_GET['id'];
        del($id);
        redirect('index.php?action=list');
        break;
    default :
        redirect('index.php?action=list');
        break;
        
}

?>