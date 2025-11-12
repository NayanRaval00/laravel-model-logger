# 🚀 Laravel Model Logger

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-12.x-orange.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-%5E8.2-blue.svg)](https://www.php.net/)

A simple and powerful Laravel package that **automatically logs Eloquent model events** (Created, Updated, Deleted) into a database or a log file.

---

## ✨ Features

- 🔄 Automatically logs `created`, `updated`, and `deleted` events.
- 💾 Choose between **database logging** or **file logging**.
- ⚙️ Fully configurable.
- 📜 Easy to integrate using a simple trait.
- 🧩 Compatible with Laravel 10, 11, and 12.

---

## 🧱 Installation

### 1️⃣ Add the repository (if you’re developing locally)
In your Laravel project’s `composer.json`:

```json
"repositories": [
    {
        "type": "path",
        "url": "app/packages/laravellogger/modellogger",
        "options": { "symlink": true }
    }
]
