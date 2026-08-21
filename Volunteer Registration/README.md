# Laravel Blade Volunteer Registration Form

A basic **Volunteer Registration** form built with Laravel Blade that submits form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
volunteer-registration/
├── README.md
├── routes/
│   └── web.php
└── resources/
    └── views/
        └── volunteer_registration.blade.php
```

## Form Fields

* Full Name
* Email
* Phone
* Age
* Availability
* Area of Interest
* About Yourself

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/volunteer-registration', 'volunteer_registration');
```

### 2. Add the Blade File

Create:

```text
resources/views/volunteer_registration.blade.php
```

Add the Volunteer Registration form code.

### 3. Add Your SmartFormify Endpoint

Update the form action:

```html
<form
    action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
    method="POST"
>
```

Replace `YOUR_FORM_ENDPOINT` with your actual SmartFormify endpoint.

### 4. Run Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000/volunteer-registration
```

## Note

This is a basic Laravel Blade example. Laravel serves the Blade view, while the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
