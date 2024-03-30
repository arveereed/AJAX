<?php
require_once 'inc/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 2</title>
  <style>
    body { background-color: rgba(0, 0, 0, 0.2); }

    .container {
      height: 50%;
      width: 50%;
      background-color: #fff;
      padding: 1px 20px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    button {
      background-color: #000;
      cursor: pointer;
      border: none;
      outline: none;
      color: #fff;
      font-size: 15px;
      padding: 5px 10px;
      border-radius:3px;
      margin-left: 50px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    /* 
     Used to check if the document is loaded the rest
     of the document, then do something with it
    */
    $(document).ready(() => {

      let commentCount = 2;
      $('button').click(() => {
        commentCount += 2;
        $('.container').load('load-comments.php', {
          commentNewCount: commentCount
        });
      });

    });
  </script>
</head>
<body>
  <div class="container">
    <?php

    $query = 'SELECT * FROM tbl_comments LIMIT 2';
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>";
        echo $row['Author'] . '<br>';
        echo '- ' . $row['Message'];
        echo "</p>";
      }
    } else {
      echo 'there are no comments';
    }
    ?>
  </div>
  <button>View more convo</button>
</body>
</html>