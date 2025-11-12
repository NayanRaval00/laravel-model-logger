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
```

2️⃣ Require the package
```
composer require nayan/model-logger:@dev
```

3️⃣ Publish config (optional)

```
php artisan vendor:publish --tag=config 
```

(This will create: config/model-logger.php)

4️⃣ Run migrations (if using database logging)

```
php artisan migrate
```

⚙️ Configuration

config/model-logger.php:

```
return [
    'log_to' => 'database', // or 'file'
    'log_file' => storage_path('logs/model-events.log'),
];
```



You can switch between logging to a database or to a log file easily.

🧩 Usage

Add the LogsModelEvents trait to any Eloquent model you want to monitor.
```
use laravelLogger\ModelLogger\Traits\LogsModelEvents;

class Post extends Model
{
    use LogsModelEvents;
}

```
That’s it! 🎉

Whenever this model is created, updated, or deleted, an entry will automatically be logged.

📊 Example Log Entries

🗃️ Database Example
| id | model           | event   | attributes                       | created_at          |
| -- | --------------- | ------- | -------------------------------- | ------------------- |
| 1  | App\Models\Post | created | {"id":1,"title":"Hello World"}   | 2025-11-11 10:00:00 |
| 2  | App\Models\Post | updated | {"id":1,"title":"Updated Title"} | 2025-11-11 10:05:00 |
