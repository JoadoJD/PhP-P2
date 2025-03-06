<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" type="text/css" href="styles.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
       $(document).ready(function(){
           // Zoekfunctie
           $("#search").on("keyup", function() {
               var value = $(this).val().toLowerCase();
               $("table tr").filter(function() {
                   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
               });
           });

           // Sorteerfunctie
           $("#sort").click(function(){
               var rows = $('table tbody tr').get();

               rows.sort(function(a, b) {
                   var A = $(a).children('td').eq(0).text().toUpperCase();
                   var B = $(b).children('td').eq(0).text().toUpperCase();
                   return A.localeCompare(B);
               });

               $.each(rows, function(index, row) {
                   $('table').children('tbody').append(row);
               });
           });

           // Invoerformulier voor nieuwe cijfers
           $("#submit").click(function(){
               var leerling = $("#leerling").val();
               var cijfer = $("#cijfer").val();
               var vak = $("#vak").val();
               var docent = $("#docent").val();
               // Valideer invoer hier indien nodig

// Voeg nieuwe rij toe aan tabel met vak en docent
$("table tbody").append("<tr><td>" + leerling + "</td><td>" + vak + "</td><td>" + docent + "</td><td>" + cijfer + "</td></tr>");

               // Voeg nieuwe cijfers toe aan de database met behulp van PHP-scripts
               $.post("home2.php", { leerling: leerling, cijfer: cijfer, vak: vak, docent: docent });
           });
       });
       </script>
</head>
<body>
<input type="text" id="search" placeholder="Zoeken op leerling..">

   <?php
   include "select.php";
   ?>


<h2>Voeg nieuwe cijfers toe:</h2>
<input type="text" id="leerling" placeholder="Leerling">
<input type="text" id="cijfer" placeholder="cijfer">
<input type="text" id="vak" placeholder="vak">
<input type="text" id="docent" placeholder="docent">
<button id="submit">Toevoegen</button>

</body>
</html>

