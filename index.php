<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lost and Found</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

<!-- Custom CSS (inline) -->
<style>
body {
    background: linear-gradient(135deg, #f8d7da, #d1e7dd); /* soft red-green gradient */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background: #343a40;
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

/* Centered content box */
.content-box {
    max-width: 700px;
    margin: 6rem auto;
    background: #ffffff;
    padding: 2.5rem;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.content-box h1 {
    font-family: 'Roboto', sans-serif;
    color: #000000; /* black heading */
    font-weight: 700;
    font-size: 2.2rem;
    margin-bottom: 1.5rem;
}

.content-box p {
    color: #333;
    margin-bottom: 1.5rem;
}

.home-links a {
    margin: 0.5rem;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
}
</style>
</head>

<body>
<header class="d-flex justify-content-between align-items-center">
    <a href="index.php" class="logo">Lost & Found</a>
    <ul class="d-flex mb-0">
        <li><a href="report_lost.php" class="px-2">Report Lost Item</a></li>
        <li><a href="report_found.php" class="px-2">Report Found Item</a></li>
        <li><a href="view_items.php" class="px-2">View Items</a></li>
        <li><a href="claim_meeting.php" class="px-2">Claim Meeting</a></li>
    </ul>
</header>

<main>
    <div class="content-box">
        <h1>Welcome to the Lost & Found Center</h1>
        <p>Report items you've lost or found to help our community.</p>
        <div class="home-links">
            <a href="report_lost.php" class="btn btn-danger">I Lost Something</a>
            <a href="report_found.php" class="btn btn-success">I Found Something</a>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
