<?php
include_once("./config/conexao.php");
include_once("./config/constantes.php");
include_once("./func/funcoes.php");
$conn = connection();

if (isset($_GET['idfilme'])) {
  $id = $_GET['idfilme'];
  $delete = "DELETE FROM filme WHERE idfilme = :id";
  $delete = $conn->prepare($delete);
  $delete->bindParam(':id', $id);
  $conn->beginTransaction();
  $delete->execute();
  $conn->commit();
  header('location:adm.php?page=filmes&del=delet');
}




