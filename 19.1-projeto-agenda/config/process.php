<?php 

session_start();

include_once("conn.php");
include_once("url.php");

$id;

if (!empty($_GET)) {
    $id = $_GET["id"];
}


if (!empty($id)) {
    $query = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->bindParam(":id", $id);
    $contact = $stmt->fetch();

}else {
    $contacts = [];

    $query = "SELECT * FROM contacts";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll();
}
if (isset($_SESSION["msg"])) {
    
    $printMsg = $_SESSION["msg"];
    $_SESSION["msg"] = "";
    
}
?>