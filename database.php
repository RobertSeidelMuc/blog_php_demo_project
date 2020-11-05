<?php
  $pdo = new PDO(
    'mysql:host=localhost;dbname=blog;charset=utf8',
    'blog',
    '6hjsdMFz4kbeqGCS'
  );
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  ?> 