<!-- ТУТ БУДУТ ВСЕ ПОЛЬЗОВАТЕЛИ, КОТОРЫЕ ОТПРАВИЛИ ЗАЯВКУ -->
<?php 
include('pdo.php');
$select = getbase()->query('SELECT * FROM user_bid')->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Все пользватели</title>
</head>

<body>
    <div class="container">
        <div class="row all_user__head">
            <h1>Вывод всех пользователей</h1>
        </div>
        <div class="row">


            <h2>Всего отправивших заявку: <?php echo count($select) ?></h2>
        </div>
        <div class="row d-flex flex-column">
            <!-- циклом перебираем массив, взятый с базы данных -->
            <?php for($i = 0; $i < count($select); $i++): ?>
            <div class="all_user">
                <p><b>Порядковый номер: <?php echo $select[$i]['id'] ?></b> </p>
                <p>Имя: <?php echo $select[$i]['name'] ?></p>
                <p>Емайл: <?php echo $select[$i]['email'] ?></p>
                <p>Телефон: <?php echo $select[$i]['phone'] ?></p>
            </div>

            <?php endfor; ?>
        </div>
    </div>
</body>

</html>

<style>
    .all_user {
        margin-top: 50px;
    }
</style>