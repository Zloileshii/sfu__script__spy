<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=?;charset=utf8', '?', '?');
    $res = $pdo->query('SELECT * FROM node_revisions WHERE uid = 227 ORDER BY timestamp');
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h3>English</h3>
    <ol>
        <?php
        foreach ($res as $k) {
            // echo '<pre>';
            // print_r($k);
            // echo '</pre>';
            echo "<li><small>" . date('Y-m-d H:i:s', $k['timestamp']) . "</small> <strong>Darya Sharkevich</strong> <a href='http://www.sfu-kras.ru/node/{$k['nid']}'>http://www.sfu-kras.ru/node/{$k['nid']}</a></li>";
        }
        ?>
    </ol>

    <?php
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=?;charset=utf8', '?', '?');
    $res = $pdo->query('SELECT * FROM node_revisions WHERE uid = 24 ORDER BY timestamp');
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h3>Sport</h3>
    <ol>
        <?php
        foreach ($res as $k) {
            // echo '<pre>';
            // print_r($k);
            // echo '</pre>';
            echo "<li><small>" . date('Y-m-d H:i:s', $k['timestamp']) . "</small> <strong>Irina Verhoturova</strong> <a href='http://www.sport.sfu-kras.ru/node/{$k['nid']}'>http://www.sport.sfu-kras.ru/node/{$k['nid']}</a></li>";
        }
        ?>
    </ol>

</body>

</html>