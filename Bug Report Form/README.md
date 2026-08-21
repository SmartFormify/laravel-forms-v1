# Laravel Blade Bug Report Form

A basic **Bug Report** form built with Laravel Blade that submits form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
bug-report/
├── README.md
├── routes/
│   └── web.php
├── resources/
│   └── views/
│       └── bug_report.blade.php
└── public/
    └── css/
        └── style.css
```

## Form Fields

* Full Name
* Email
* Bug Title
* Bug Category
* Severity
* Page URL
* Bug Description
* Steps to Reproduce
* Expected Result
* Actual Result

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/bug-report', 'bug_report');
```

### 2. Add the Blade File

Create:

```text
resources/views/bug_report.blade.php
```

Add the Bug Report form code.

### 3. Add the CSS File

Create:

```text
public/css/bug_report.css
```

The Blade file loads the stylesheet using:

```blade
<link
    rel="stylesheet"
    href="{{ asset('css/style.css') }}"
>
```

### 4. Add Your SmartFormify Endpoint

Update the form action:

```html
<form
    action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
    method="POST"
>
```

Replace `YOUR_FORM_ENDPOINT` with your actual SmartFormify endpoint.

### 5. Run Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000/bug-report
```

## Note

This is a basic Laravel Blade example. Laravel serves the Blade view, the external CSS file handles styling, and the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
