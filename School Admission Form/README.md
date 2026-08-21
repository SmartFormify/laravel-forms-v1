# Laravel Blade School Admission Form

A basic **School Admission** form built with Laravel Blade that submits form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
school-admission/
├── README.md
├── routes/
│   └── web.php
├── resources/
│   └── views/
│       └── school_admission.blade.php
└── public/
    └── css/
        └── style.css
```

## Form Fields

* Student Name
* Date of Birth
* Gender
* Applying for Class
* Parent / Guardian Name
* Parent / Guardian Email
* Parent / Guardian Phone
* Address
* Previous School
* Additional Information

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/school-admission', 'school_admission');
```

### 2. Add the Blade File

Create:

```text
resources/views/school_admission.blade.php
```

Add the School Admission form code.

### 3. Add the CSS File

Create:

```text
public/css/school_admission.css
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
http://127.0.0.1:8000/school-admission
```

## Note

This is a basic Laravel Blade example. Laravel serves the Blade view, the external CSS file handles styling, and the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
