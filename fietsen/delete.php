<?php
    if(isset($_GET['id'])) {

    //echo "Mijn id = " . $_GET['id'];

    // Haal de rij-info op van fiets met bijbehorende id
    // SELECT * FROM fietsen WHERE id = 1;

    //connect database
    include "connect.php";

    //Maak een query
    $sql = "DELETE FROM fietsen WHERE id = :id";
    //Prepare query
    $stmt = $conn->prepare($sql);
    //Uitvoeren
    $stmt->execute(
        [':id'=>$_GET['id']]
    );
    if( $stmt->rowCount() == 1){

        header("Location: home2.php");
            exit("Location: home2.php");
    }else {
        echo "Update is fout gegaan<br>";
    }
}
?>