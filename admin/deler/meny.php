<?php 

    include('../config/konstanter.php'); 
    include('login-sjekk.php');

?>

<html>
    <head>
        <title>Halal Kingdom - Dashboard</title>
        <link rel="stylesheet" href="../css/admin.css"> <!-- Jeg bruker ".." for å gå ut av "admin" mappen slik at jeg kan få tilgang til css mappen. -->
    </head>

    <body>
        <!-- Meny Seksjon Starter -->
        <div class="meny text-center">
            <div class="innpakning">
                <ul>
                    <li><a href="index.php">Hjem</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="kategori.php">Kategori</a></li>
                    <li><a href="matmeny.php">Mat</a></li>
                    <li><a href="order.php">Bestillinger</a></li>
                    <li><a href="logout.php">Logg ut</a></li>
                </ul>
            </div>
        </div>
        <!-- Meny Seksjon Slutter -->
