<?php
require 'supabase.php';
$res = sb_get_recent_items(50);
$items = ($res['status'] >= 200 && $res['status'] < 300) ? $res['data'] : [];
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Recent Items</title><link rel="stylesheet" href="styles.css">
</head><body>
<nav><a href="index.php">Home</a> | <a href="report_lost.php">Report Lost</a> | <a href="report_found.php">Report Found</a></nav>
<h2>Recent Lost & Found Items</h2>
<?php if (empty($items)): ?>
  <p>No items found.</p>
<?php else: ?>
  <table border="1" cellpadding="6">
    <tr><th>ID</th><th>Type</th><th>Name</th><th>Description</th><th>Date</th><th>Actions</th></tr>
    <?php foreach($items as $it): ?>
      <tr>
        <td><?=htmlspecialchars($it['id'])?></td>
        <td><?=htmlspecialchars($it['type'])?></td>
        <td><?=htmlspecialchars($it['item_name'])?></td>
        <td><?=nl2br(htmlspecialchars($it['description']))?></td>
        <td><?=htmlspecialchars($it['date_reported'])?></td>
        <td>
           <a href="request_claim.php?item_id=<?=urlencode($it['id'])?>">Request Claim</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>
</body></html>
