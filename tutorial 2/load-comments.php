<?php
require_once 'inc/dbh.inc.php';

$commentNewCount = $_POST['commentNewCount'];

$query = 'SELECT * FROM tbl_comments LIMIT ' . $commentNewCount;
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