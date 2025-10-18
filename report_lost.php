<?php
// Initialize variables
$item_name = $description = $location_lost = $date_lost = $contact_info = "";
$errors = [];
$success_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate each input
    $item_name = trim($_POST['item_name']);
    $description = trim($_POST['description']);
    $location_lost = trim($_POST['location_lost']);
    $date_lost = trim($_POST['date_lost']);
    $contact_info = trim($_POST['contact_info']);

    if (empty($item_name)) {
        $errors['item_name'] = "Item Name is required.";
    }
    if (empty($description)) {
        $errors['description'] = "Description is required.";
    }
    if (empty($location_lost)) {
        $errors['location_lost'] = "Location Lost is required.";
    }
    if (empty($date_lost)) {
        $errors['date_lost'] = "Date Lost is required.";
    }
    if (empty($contact_info)) {
        $errors['contact_info'] = "Contact Info is required.";
    }

    // If no errors, show success
    if (empty($errors)) {
        $success_message = "Lost Item Form submitted successfully!";
        // Here you can also save data to a database if needed
        // Clear form values
        $item_name = $description = $location_lost = $date_lost = $contact_info = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report Lost Item</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #fff5f5;
    font-family: Arial, sans-serif;
}
header {
    background: #6d0101ff;
    padding: 1rem;
}
header .logo {
    color: #fff;
    font-weight: bold;
    font-size: 1.5rem;
    text-decoration: none;
}
header ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}
header ul li {
    margin-left: 1rem;
}
header ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}
header ul li a:hover {
    text-decoration: underline;
}
main {
    padding: 3rem 1rem;
    max-width: 700px;
    margin: auto;
}
h2 {
    color: #c82333;
    text-align: center;
    margin-bottom: 2rem;
}
form {
    background: #fff;
    border-radius: 8px;
    padding: 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
button {
    background-color: #c82333;
    border: none;
}
button:hover {
    background-color: #a71d2a;
}
.error {
    color: red;
    font-size: 0.9rem;
}
.success {
    color: green;
    font-size: 1rem;
    margin-bottom: 1rem;
    text-align: center;
}
</style>
</head>

<body>
<header class="d-flex justify-content-between align-items-center">
    <a href="index.php" class="logo">Lost & Found</a>
    <ul class="d-flex mb-0">
        <li><a href="index.php" class="px-2">Home</a></li>
        <li><a href="report_lost.php" class="px-2">Report Lost Item</a></li>
        <li><a href="report_found.php" class="px-2">Report Found Item</a></li>
        <li><a href="view_items.php" class="px-2">View Items</a></li>
        <li><a href="claim_meeting.php" class="px-2">Claim Meeting</a></li>
    </ul>
</header>

<main>
    <h2>Report Lost Item</h2>

    <?php if(!empty($success_message)) : ?>
        <div class="success"><?= $success_message ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" name="item_name" id="item_name" class="form-control" value="<?= htmlspecialchars($item_name) ?>">
            <?php if(isset($errors['item_name'])): ?><div class="error"><?= $errors['item_name'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3"><?= htmlspecialchars($description) ?></textarea>
            <?php if(isset($errors['description'])): ?><div class="error"><?= $errors['description'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="location_lost" class="form-label">Location Lost</label>
            <input type="text" name="location_lost" id="location_lost" class="form-control" value="<?= htmlspecialchars($location_lost) ?>">
            <?php if(isset($errors['location_lost'])): ?><div class="error"><?= $errors['location_lost'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="date_lost" class="form-label">Date Lost</label>
            <input type="date" name="date_lost" id="date_lost" class="form-control" value="<?= htmlspecialchars($date_lost) ?>">
            <?php if(isset($errors['date_lost'])): ?><div class="error"><?= $errors['date_lost'] ?></div><?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="contact_info" class="form-label">Contact Info</label>
            <input type="text" name="contact_info" id="contact_info" class="form-control" value="<?= htmlspecialchars($contact_info) ?>">
            <?php if(isset($errors['contact_info'])): ?><div class="error"><?= $errors['contact_info'] ?></div><?php endif; ?>
        </div>

        <button type="submit" class="btn btn-danger w-100">Submit</button>
    </form>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
