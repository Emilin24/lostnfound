<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Claim Meeting</title>

<!-- ✅ Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ✅ Inline CSS -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #e8f5cdff;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #b78a02ff;
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
        color: #ffc107;
        margin-bottom: 25px;
    }
    button {
        font-size: 1rem;
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
    <h2>Schedule a Claim Meeting</h2>
    <form onsubmit="submitForm(event, 'Claim Meeting Form')">
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" id="item_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contact_info" class="form-label">Contact Info</label>
            <input type="text" id="contact_info" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="meeting_date" class="form-label">Preferred Meeting Date</label>
            <input type="date" id="meeting_date" class="form-control" required>
        </div>
        <button class="btn btn-warning w-100">Submit</button>
    </form>
</main>

<!-- ✅ Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ Optional JS -->
<script>
function submitForm(event, formName) {
    event.preventDefault();
    alert(formName + " submitted successfully!");
}
</script>
</body>
</html>
