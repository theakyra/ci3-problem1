<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>this is new view</h1>
    <?php foreach ($users as $user):;?>
    <table>
        <tr>
            <td>
                <?=$user['firstname']?>
            </td>
            <td>
                <?=$user['secondname']?>
            </td>
        </tr>
    </table>
    <?php endforeach;?>
</body>
</html>