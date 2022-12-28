<?php
namespace VTCA;
require './VTCA_Student.php';

$a = [
    new VTCA_Student(1, 'Wind Li', 10, 9.5, 8),
    new VTCA_Student(2, 'Daisy Li', 7, 9, 8),
    new VTCA_Student(3, 'Tony Ren', 8, 9, 7),
    new VTCA_Student(4, 'Brave', 9, 9, 9),
    new VTCA_Student(5, 'Ken', 8, 8, 8)
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Student code</th>
        <th>Student name</th>
        <th>Average mark</th>
    </tr>
    <?php foreach ($a as $item) { ?>
    <tr>
        <td><?= $item->getcode() ?></td>
        <td><?= $item->getname() ?></td>
        <td><?= $item->avg_mark() ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
