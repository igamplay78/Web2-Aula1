<?php
$capital = $_POST['capital'];
$taxa = $_POST['taxa'];
$tempo = $_POST['tempo'];
$juros = $capital * $taxa * $tempo;
echo "<h1>$juros</h1>";
?>  