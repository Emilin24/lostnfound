# Lost & Found Management System

A simple web-based **Lost and Found Management System** built using **PHP** and **Supabase**.
The platform allows users to report lost or found items and helps match them efficiently through a centralized system.

🔗 **Live Demo:** [http://ipassignmentlostnfound.free.nf](http://ipassignmentlostnfound.free.nf)

📂 **Source Code:** [https://github.com/Emilin24/lostnfound](https://github.com/Emilin24/lostnfound)

---
![Screenshot_20-1-2026_17336_ipassignmentlostnfound free nf](https://github.com/user-attachments/assets/c4de97b9-8e0a-41a0-a892-241685cef45e)

## 📌 Problem Statement

In colleges, public places, and events, lost items are often managed informally—through notice boards, word of mouth, or scattered WhatsApp messages. This leads to:

* Poor tracking of lost/found items
* No structured record
* Delays in item recovery

This project provides a **centralized digital solution** to manage lost and found items transparently.

---

## ✨ Features

* Live Counter of Lost & Found items 
* Report **Lost Items**![Screenshot_20-1-2026_173317_ipassignmentlostnfound free nf](https://github.com/user-attachments/assets/05b4a153-348d-4d8a-aa0c-8d73674d917b)
* Report **Found Items**![Screenshot_20-1-2026_173331_ipassignmentlostnfound free nf](https://github.com/user-attachments/assets/31b33401-889d-4a98-bc5d-6122d456b19b)
* Store item details (name, description, location, contact info)
* View all reported items in one place![Screenshot_20-1-2026_173341_ipassignmentlostnfound free nf](https://github.com/user-attachments/assets/d34ddef5-5cd0-4f0b-8fa1-dc86ea17e143)
* Accept/Modify claim meeting requests![Screenshot_20-1-2026_17340_ipassignmentlostnfound free nf](https://github.com/user-attachments/assets/efca53be-5781-4dde-aec9-5712ff49cc72)

* Secure backend using Supabase
* Simple and clean UI for easy access

---

## 🛠️ Tech Stack

**Frontend**

* HTML
* CSS
* JavaScript

**Backend**

* PHP

**Database & Auth**

* Supabase (PostgreSQL + REST APIs)

**Hosting**

* Free hosting (InfinityFree)

---

## 🧠 System Architecture (High Level)

1. User submits a lost/found item form
2. PHP handles the request
3. Data is sent to Supabase using REST APIs
4. Supabase stores data in PostgreSQL
5. Data is retrieved and displayed on the website

---

## 🗃️ Database Design (Supabase)

Example fields used:

* item_type (lost / found)
* item_name
* description
* location
* date
* contact_details

Supabase handles:

* Data storage
* API access
* Security rules

---

## 🚀 How to Run Locally

1. Clone the repository

   ```bash
   git clone https://github.com/Emilin24/lostnfound.git
   ```

2. Place the project folder inside your local PHP server directory
   (e.g., `htdocs` for XAMPP)

3. Configure Supabase credentials in PHP files:

   * Supabase URL
   * Supabase API Key

4. Start Apache server

5. Open in browser:

   ```
   http://localhost/lostnfound
   ```

---

## 🔐 Security Notes

* API keys are handled server-side via PHP
* Supabase Row Level Security (RLS) can be enabled for better control
* No sensitive user authentication is stored locally

---

## 📈 Future Improvements

* User authentication (login/signup)
* Automated matching of lost & found items
* Admin dashboard
* Email/SMS notifications

---

## 📄 License

This project is created for academic and learning purposes.

---
