<?php require_once 'assets/data/admin_info.php'; ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link rel="icon" href="assets/img/amlsf.png" type="image/png"> 
    <title><?= $admin_info['fullname'] ?> | <?=$admin_info['job'] ?></title>
  </head>
  <body>
    <div id="table">
      <div id="centeralign">
        <img id="logo" src="assets/img/aml.jpeg" alt="logo">
        <h1><?= $admin_info['fullname'] ?> | <?=$admin_info['job'] ?></h1>
        <p id="description"><?=$admin_info['description']?></p>
        <p class="mt-5"><?=$admin_info['dev']?></p>
      </div>
    </div>
  <script src="js/script.js"></script>
  </body>
</html>