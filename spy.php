<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $pdo = new PDO('mysql:host=?;dbname=?;charset=utf8', '?', '?');
    $res = $pdo->query('SELECT * FROM node_revisions WHERE uid = 227 ORDER BY timestamp');
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <ol>
        <?php
        foreach ($res as $k) {
            // echo '<pre>';
            // print_r($k);
            // echo '</pre>';
            echo "<li><small>" . date('Y-m-d H:i:s', $k['timestamp']) . "</small> <a href='http://www.sfu-kras.ru/node/{$k['nid']}'>Darya Sharkevich</a></li>";
        }
        ?>

    </ol>

</body>

</html>