<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $transport_id = $del_id;

    $db = getDbInstance();
    $db->where('t_id', $transport_id);
    $status = $db->delete('transports');
    
    if ($status) 
    {
        $_SESSION['info'] = "Transport deleted successfully!";
        header('location: index.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete transport";
    	header('location: index.php');
        exit;

    }
    
}