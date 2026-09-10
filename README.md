# 🔒 Secure PHP Login System - Built on Termux (Android)

This project demonstrates how a vulnerable PHP login can be hacked and then secured using modern best practices. Built 100% on Android phone!

### 🚀 Features
- ✅ SQL Injection Protection (Prepared Statements)
- ✅ Password Hashing with `password_hash()` & `password_verify()`
- ✅ Brute Force Protection (5 attempts / 2 min lock)
- ✅ Secure Session Management (session_regenerate_id)
- ✅ Protected Dashboard & Logout System

### 📂 Files
- `login_final.php` - Final secure login
- `dashboard.php` - Protected dashboard
- `logout.php` - Logout + session destroy

### 🧪 How I Tested
1. Created vulnerable lab in Termux
2. Exploited it using sqlmap
3. Fixed it with prepared statements
4. Added brute force & session security

### 👨‍💻 Built By
Santosh DY | Ethical Hacking Learner | Termux Lab
> Built entirely on Android phone using Termux - No PC needed!

### 🛡️ Skills Demonstrated
PHP, SQLite, Security, Ethical Hacking, GitHub
