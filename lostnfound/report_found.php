<?php
// report_found.php
$type = 'Found';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Report Found Item</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #FFF9F0;
      padding: 20px;
      color: #333;
      position: relative;
      overflow-x: hidden;
    }

    /* Floating pastel shapes */
    .shape {
      position: absolute;
      border-radius: 50%;
      opacity: 0.3;
      z-index: 0;
    }
    .shape1 { width: 120px; height: 120px; background: #BAD6EB; top: 10%; left: -60px; }
    .shape2 { width: 80px; height: 80px; background: #F6C1C1; top: 70%; right: -40px; }
    .shape3 { width: 150px; height: 150px; background: #D0F0C0; top: 50%; left: -75px; }

    nav {
      position: relative; z-index: 1;
      background: #BAD6EB;
      padding: 14px;
      margin-bottom: 30px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    nav a { color: #333; font-weight: 600; text-decoration: none; margin: 0 15px; transition: 0.3s; }
    nav a:hover { color: #000; text-decoration: underline; }

    form {
      position: relative; z-index: 1;
      background: white;
      padding: 35px;
      width: 800px;      /* Wider / landscape */
      max-width: 95%;    /* Responsive */
      margin: auto;
      border-radius: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      border: 3px solid #BAD6EB; /* Blue border */
    }

    h2 {
      text-align: center;
      color: #4C6B8B;
      margin-bottom: 30px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    /* Label + flexbox for icon + input */
    label {
      display: flex;
      align-items: center;
      margin-bottom: 18px;
      font-weight: 500;
      color: #555;
      font-size: 14.5px;
    }

    label .icon {
      margin-right: 12px;
      color: #7BB3D1;
      font-size: 18px;
      flex-shrink: 0;
    }

    input, textarea {
      flex: 1;
      padding: 12px 14px;
      border: 1px solid #BAD6EB;
      border-radius: 15px;
      font-size: 14px;
      background: #F4F8FB;
      transition: 0.3s;
      box-shadow: inset 0 2px 5px rgba(0,0,0,0.03);
      box-sizing: border-box;
    }

    input:focus, textarea:focus {
      border-color: #7BB3D1;
      outline: none;
      background: #E8F3FC;
      box-shadow: 0 0 8px rgba(186,214,235,0.5);
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    button {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #BAD6EB, #7BB3D1);
      color: #FFF9F0;
      font-weight: 600;
      font-size: 16px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      margin-top: 12px;
    }
    button:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,0.15); }
  </style>
</head>
<body>
  <!-- Background Shapes -->
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <nav>
    <a href="#">Home</a> | 
    <a href="#">Report Lost</a> | 
    <a href="#">View Recent</a>
  </nav>

  <h2>Report a Found Item</h2>
  <form method="post" action="#">
    <input type="hidden" name="type" value="Found">

    <label>
      <i class="uil uil-box icon"></i>
      <input name="item_name" type="text" placeholder="Item Name" required>
    </label>

    <label>
      <i class="uil uil-calendar-alt icon"></i>
      <input name="event_date" type="date">
    </label>

    <label>
      <i class="uil uil-clock icon"></i>
      <input name="event_time" type="time">
    </label>

    <label>
      <i class="uil uil-map-marker icon"></i>
      <input name="location" type="text" placeholder="Place Found">
    </label>

    <label>
      <i class="uil uil-star icon"></i>
      <input name="item_condition" type="text" placeholder="Condition of Item">
    </label>

    <label>
      <i class="uil uil-align-left icon"></i>
      <textarea name="description" placeholder="Description" required></textarea>
    </label>

    <label>
      <i class="uil uil-image icon"></i>
      <input name="picture_url" type="text" placeholder="Picture URL (Optional)">
    </label>

    <button type="submit">Submit Report</button>
  </form>
</body>
</html>

