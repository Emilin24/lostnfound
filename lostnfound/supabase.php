<?php
// supabase.php
// Simple helper: read .env and make REST calls to Supabase PostgREST endpoint.

$env = parse_ini_file(__DIR__.'/.env', false, INI_SCANNER_RAW);
if (!$env) {
    die("Missing .env; please create SUPABASE_URL and SUPABASE_KEY");
}
define('SUPABASE_URL', rtrim($env['SUPABASE_URL'], '/'));
define('SUPABASE_KEY', $env['SUPABASE_KEY']);

// low-level request helper
function sb_request($method, $path, $body = null, $query = '') {
    $url = SUPABASE_URL . '/rest/v1' . $path . ($query ? ('?' . $query) : '');
    $ch = curl_init($url);
    $headers = [
        'apikey: ' . SUPABASE_KEY,
        'Authorization: Bearer ' . SUPABASE_KEY,
        'Content-Type: application/json',
        'Accept: application/json'
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }
    $resp = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($resp === false) {
        $err = curl_error($ch);
        curl_close($ch);
        return ['error' => $err, 'http_code' => $code];
    }
    curl_close($ch);
    $json = json_decode($resp, true);
    return ['status' => $code, 'data' => $json];
}

// convenience wrappers
function sb_insert_item($type, $item_name, $description) {
    $body = [
        'type' => $type,
        'item_name' => $item_name,
        'description' => $description
    ];
    // adding select=* will return the row inserted (PostgREST)
    return sb_request('POST', '/items', $body, 'return=representation');
}

function sb_get_recent_items($limit = 20) {
    // order by date_reported desc, limit
    $query = sprintf('select=*&order=date_reported.desc&limit=%d', intval($limit));
    return sb_request('GET', '/items', null, $query);
}

function sb_insert_claim($item_id, $requester_name, $contact_info, $message) {
    $body = [
        'item_id' => $item_id,
        'requester_name' => $requester_name,
        'contact_info' => $contact_info,
        'message' => $message
    ];
    return sb_request('POST', '/claims', $body, 'return=representation');
}
