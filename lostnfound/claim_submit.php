<?php
// claim_submit.php
require 'supabase.php';

$item_id = intval($_POST['item_id'] ?? 0);
$name = trim($_POST['requester_name'] ?? '');
$contact = trim($_POST['contact_info'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$item_id || !$name || !$contact) {
    die("Missing fields.");
}

$res = sb_insert_claim($item_id, $name, $contact, $message);
if (isset($res['status']) && $res['status'] >= 200 && $res['status'] < 300) {
    header("Location: view_recent.php?msg=claim_sent");
    exit;
} else {
    echo "Request failed. ";
    var_export($res);
}
