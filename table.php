<?php
$data_json = file_get_contents(__DIR__.'/adress_base.json');
$data = json_decode($data_json, true);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица адресов и телефонов</title>
</head>
<body>
<pre>
    <?php print_r($data) ?>
</pre>
  <table>
      <thead>
      <tr>
          <td>Номер</td>
          <td>Имя</td>
          <td>Фамилия</td>
          <td>Улица</td>
          <td>Город</td>
          <td>Индекс</td>
          <td>Телефон</td>
      </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $i => $user) :?>
          <tr>
              <td><?php echo ++$i ?></td>
              <td><?php echo $user['firstName'] ?></td>
              <td><?php echo $user['lastName'] ?></td>
              <td><?php echo $user['address']['streetAddress'] ?></td>
              <td><?php echo $user['address']['city'] ?></td>
              <td><?php echo $user['address']['postalCode'] ?></td>
              <td><?php echo $user['phoneNumbers'][0] ?></td>
          </tr>
        <?php endforeach;?>
      </tbody>
  </table>

</body>
</html>