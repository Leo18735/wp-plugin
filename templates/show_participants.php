<?php

global $wpdb;

$lager_id = 1;

// $sql = "SELECT Name, Nachname, Bezahlt, Stufe, Essen FROM teilnehmer LEFT JOIN lagerteilnahme ON lagerteilnahme.ID_teilnehmer=teilnehmer.ID_teilnehmer WHERE lagerteilnahme.Id_lager=" . $lager_id;

//$result = $wpdb->get_results($sql);
$result = [];
?>

<table>
    <tr>
        <th></th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Stufe</th>
        <th>Person</th>
        <th>Bezahlt</th>
        <th>Bemerkung</th>
    </tr>
    <?php foreach ($result as $res): ?>
        <tr>
            <td></td>
            <td><?=$res->Name; ?></td>
            <td><?=$res->Nachname; ?></td>
            <td><?=$res->Stufe; ?></td>
            <td>1</td>
            <td><?=$res->Bezahlt; ?></td>
            <td><?=$res->Essen; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="#" method="POST">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $sql = "INSERT INTO Teilnehmer (Name) VALUES ('" . $name . "')";
        echo $sql;
        $wpdb->query($sql);
    }
?>