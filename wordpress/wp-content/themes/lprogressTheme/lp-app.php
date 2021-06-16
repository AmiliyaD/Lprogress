<!-- Template Name: Заявки -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки пользователей</title>
</head>
<body>
    <?php
    
    global $wpdb;
    $app = $wpdb->get_results("SELECT * FROM form_dataform");
 


    ?>
    <div class="container">
        <div class="row all_user__head">
            <h1>Вывод всех пользователей</h1>
        </div>
        <div class="row">


            <h2>Всего отправивших заявку: <?php echo count($app) ?></h2>
        </div>
        <div class="row d-flex flex-column">
            <!-- циклом перебираем массив, взятый с базы данных -->
            <div class="aa">
            <?php foreach($app as $appe): 
                         $name =   $appe->name;  // var_dump($app[$i]->value);
                         $valueee = $appe->value;
                ?>
             <div class="all_user">
                <p><b>ID пользователя: <?php echo $appe->id ?></b> </p>
         
                <p>Имя: <?php echo $appe->form_name ?></p>
               
              
                <p>Email: <?php echo $appe->emailAdress ?></p>
              
                
                <p>Телефон: <?php echo $appe->phone ?></p>
            </div>
            </div>

            <?php endforeach; ?>
            </div>
 







      
        </div>
    </div>
</body>

</html>

<style>
    .all_user {
        margin-top: 50px;
    }
</style>
</body>
</html>