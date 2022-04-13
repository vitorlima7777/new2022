<?php
    include_once("config/conexao.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = "DELETE FROM tbContato WHERE idContato=:id";
        try{
            $resultDel =  $conect->prepare($delete);
            $resultDel -> bindParam(":id",$id,PDO::PARAM_INT);
            $resultDel -> execute();
            $contar = $resultDel->rowCount();
            if($contar>0){
                header("Location: relatorio.php");
            }else{
                header("Location: relatorio.php");
            }
        }catch(PDOException $e){
            echo "<strong>ERRO DE DELETE;</strong>".$e->getMessage();
        }
    }
?>