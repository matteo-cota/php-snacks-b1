<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>
    <?php
    foreach ($db as $role => $people) {
        echo "<div class='$role'>";
        echo "<h3>" . ucfirst($role) . "</h3>";
        echo "<ul>";

        foreach ($people as $person) {
            echo "<li>" . $person['name'] . " " . $person['lastname'] . "</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
</body>
<style>
.teachers {
    background-color: lightgray;
    padding: 10px;
    margin: 10px 0;
}

.pm {
    background-color: lightgreen;
    padding: 10px;
    margin: 10px 0;
}
</style>

</html>