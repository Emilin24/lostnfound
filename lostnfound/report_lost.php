<?php
// report_lost.php
$type = 'Lost';
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Report Lost</title><link rel="stylesheet" href="styles.css">
</head><body>
<nav><a href="index.php">Home</a> | <a href="view_recent.php">View Recent</a></nav>
<h2>Report Lost Item</h2>
<form method="post" action="submit.php">
  <input type="hidden" name="type" value="<?=htmlspecialchars($type)?>">
  <label>Item name: <input name="item_name" required></label><br>
  <label>Description: <textarea name="description" required></textarea></label><br>
  <button type="submit">Submit</button>
</form>
</body></html>
