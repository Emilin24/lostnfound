<?php
// submit.php
require 'supabase.php';

// simple sanitization
$type = $_POST['type'] ?? '';
$item_name = $_POST['item_name'] ?? '';
$description = $_POST['description'] ?? '';

if (!$type || !$item_name) {
    die("Missing fields.");
}

$res = sb_insert_item($type, $item_name, $description);
if (isset($res['status']) && $res['status'] >= 200 && $res['status'] < 300) {
    // success - show created row (first element)
    $row = is_array($res['data']) ? $res['data'][0] : null;
    header("Location: view_recent.php?msg=created");
    exit;
} else {
    echo "Insert failed. Response: ";
    var_export($res);
}
