<html>
 <head>
  <meta charset=utf-8">
  <title>Таблица пользователей</title>
 </head>
 <body>
  <h1>Index Page</h1>
  <p>
      <a href="addUser.php">New Person</a>
    <form action="addUser.php">
      <button>New Person</button>
    </form>
  </p>
  <table border="1">
      <tr>
          <th>First Name</th>
          <th>Surname</th>
      </tr>
      <?php foreach ($usersList as $user):?>
      <tr><td><?php echo $user['first_name'];?></td><td><?php echo $user['surname'];?></td></tr>
      <?php endforeach; ?>
  </table>
  </body>
</html>
