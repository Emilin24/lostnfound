<?php
// Initialize variables
$item_name = $description = $location_found = $date_found = $contact_info = "";
$errors = [];
$success_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = trim($_POST['item_name']);
    $description = trim($_POST['description']);
    $location_found = trim($_POST['location_found']);
    $date_found = trim($_POST['date_found']);
    $contact_info = trim($_POST['contact_info']);

    // Validate fields
    if (empty($item_name)) $errors['item_name'] = "Item Name is required.";
    if (empty($description)) $errors['description'] = "Description is required.";
    if (empty($location_found)) $errors['location_found'] = "Location Found is required.";
    if (empty($date_found)) $errors['date_found'] = "Date Found is required.";
    if (empty($contact_info)) $errors['contact_info'] = "Contact Info is required.";

    if (empty($errors)) {
        $success_message = "Found Item Form submitted successfully!";
        // Clear form values
        $item_name = $description = $location_found = $date_found = $contact_info = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report Found Item</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #d1f4e3ff;
    margin: 0;
    padding: 0;
}
header {
    background-color: #198754;
    color: white;
    padding: 15px 30px;
}
header .logo {
    font-weight: bold;
    font-size: 1.5rem;
    text-decoration: none;
    color: white;
}
header ul {
    list-style: none;
    display: flex;
    gap: 15px;
    margin: 0;
    padding: 0;
}
header ul li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}
header ul li a:hover {
    text-decoration: underline;
}
main {
    max-width: 600px;
    margin: 50px auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
h2 {
    text-align: center;
    color: #198754;
    margin-bottom: 25px;
}
.error {
    color: red;
    font-size: 0.9rem;
    margin-top: 5px;
}
.success {
    color: green;
    text-align: center;
    margin-bottom: 15px;
}
</style>

</head>
<body>

<header class="d-flex justify-content-between align-items-center">
    <a href="index.php" class="logo">Lost & Found</a>
    <ul class="d-flex mb-0">
        <li><a href="index.php" class="px-2">Home</a></li>
        <li><a href="report_lost.php">Report Lost Item</a></li>
        <li><a href="report_found.php">Report Found Item</a></li>
        <li><a href="view_items.php">View Items</a></li>
        <li><a href="claim_meeting.php">Claim Meeting</a></li>
    </ul>
</header>

<main>
    <h2>Report Found Item</h2>

    <?php if(!empty($success_message)) : ?>
        <div class="success"><?= $success_message ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" id="item_name" name="item_name" class="form-control" value="<?= htmlspecialchars($item_name) ?>">
            <?php if(isset($errors['item_name'])): ?><div class="error"><?= $errors['item_name'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3"><?= htmlspecialchars($description) ?></textarea>
            <?php if(isset($errors['description'])): ?><div class="error"><?= $errors['description'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="location_found" class="form-label">Location Found</label>
            <input type="text" id="location_found" name="location_found" class="form-control" value="<?= htmlspecialchars($location_found) ?>">
            <?php if(isset($errors['location_found'])): ?><div class="error"><?= $errors['location_found'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="date_found" class="form-label">Date Found</label>
            <input type="date" id="date_found" name="date_found" class="form-control" value="<?= htmlspecialchars($date_found) ?>">
            <?php if(isset($errors['date_found'])): ?><div class="error"><?= $errors['date_found'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="contact_info" class="form-label">Contact Info</label>
            <input type="text" id="contact_info" name="contact_info" class="form-control" value="<?= htmlspecialchars($contact_info) ?>">
            <?php if(isset($errors['contact_info'])): ?><div class="error"><?= $errors['contact_info'] ?></div><?php endif; ?>
        </div>

        <button class="btn btn-success w-100">Submit</button>
    </form>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
