<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/todo.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
    <title>Todo PHP</title>
</head>
<body>
  <div class="container">
   <div class="container-todo">
   <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
   <div class="header-todo">
     <h1>Список дел</h1>
     </div>
    <div class="todo_block"> 
    <form action="add.php" method="post">
     <input type="text" name="task" placeholder="нужно сделать..." class="form-control">
     <button type="submit" name="sendTaks" class="btn btn-success">Добавить задачу</button>
    </form>
   </div>

   
   <div class="alert-block">

   </div>
   <?php
      require 'config.php';

      echo '<div class="list-tasks"><ul>';
      $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button class="btn btn-danger">Удалить</button></a></li>';
      }
      echo '</ul></div>';
    ?>
   </div>
   </div>

</body>
</html>