<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga</title>
</head>
<body>
    <?php
        $db = new mysqli('localhost', 'root', '', 'liga');
        $kwerenda = 'SELECT * FROM `zawodnicy` ORDER BY `nazwisko`'; 
        $zawodnicy = $db->query($kwerenda);
    ?>

    <h1>Liga</h1>
    <h2>Wszyscy zawodnicy alfabetycznie po nazwisku</h2>
    <p>Zawodnicy ogółem: <?php echo $zawodnicy->num_rows; ?></p>

    <ol>
        <?php 
            while ($zawodnik = $zawodnicy->fetch_assoc()) {
        ?>
            <li> <?= $zawodnik['id']; ?> <?= $zawodnik['imie']; ?> <?= $zawodnik['nazwisko']; ?> <?= $zawodnik['klub']; ?> <?= $zawodnik['pozycja']; ?> </li>
        <?php
            }
        ?>
    </ol>

    <?php
        $db->close();
    ?>
</body>
</html>