<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");
$conn = connection();

if (isset($_POST['impidusuario'])) {
    $id = $_POST['impidusuario'];
    $adm = $_POST['impnivelusu'];
    $nome = $_POST['impnomeusu'];
    $email = $_POST['impemailusu'];
    $cpf = $_POST['impcpfusu'];
    $ativo = $_POST['impativousu'];
    $update = "UPDATE usuario SET idusuario = :idusuario, adm = :adm, nome = :nome, email = :email, cpf = :cpf, ativo = :ativo WHERE idusuario = :idusuario";
    $update = $conn->prepare($update);
    $update->bindParam(':idusuario', $id);
    $update->bindParam(':adm', $adm);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':email', $email);
    $update->bindParam(':cpf', $cpf);  
    $update->bindParam(':ativo', $ativo); 
    $conn->beginTransaction();
    $update->execute();
    $conn->commit();
    header('location:adm.php?page=usuario&alt=alter');
  }
  

  


  
