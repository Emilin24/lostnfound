<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Items</title>

<!-- ✅ Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ✅ Inline CSS -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #cfe3f2ff;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #024bb9ff;
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
        max-width: 800px;
        margin: 50px auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        color: #0d6efd;
        margin-bottom: 25px;
    }
    .alert {
        text-align: center;
        font-size: 1.1rem;
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
    <h2>All Lost & Found Items</h2>
    <p class="text-center text-muted mb-4">
        This is a placeholder section to display all items.  
        You can later replace it with a table or card layout.
    </p>
    <div class="alert alert-info">No items to display yet.</div>
</main>

<!-- ✅ Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

