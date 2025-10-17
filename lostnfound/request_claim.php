<?php
// request_claim.php
$item_id = isset($_GET['item_id']) ? intval($_GET['item_id']) : '';
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Request Claim</title><link rel="stylesheet" href="styles.css">
</head><body>
<nav><a href="index.php">Home</a> | <a href="view_recent.php">View Recent</a></nav>
<h2>Request Claim Meeting</h2>
<form method="post" action="claim_submit.php">
  <label>Item ID: <input name="item_id" value="<?=htmlspecialchars($item_id)?>" required></label><br>
  <label>Your name: <input name="requester_name" required></label><br>
  <label>Contact info: <input name="contact_info" required></label><br>
  <label>Message: <textarea name="message"></textarea></label><br>
  <button type="submit">Send Request</button>
</form>
</body></html>
