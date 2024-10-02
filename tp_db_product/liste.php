<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>id</th>
        <th>libelle</th>
        <th>actions</th>
        </tr>
        <?php foreach($result as $v) ?>
            <tr>
                <td><?= $v['idville']?></td>
                <td><?= $v['libelle']?></td>
                <td>
                    <a href="" onclick(are you sure ?)></a>
                </td>

            </tr>
    </table>
</body>
</html>