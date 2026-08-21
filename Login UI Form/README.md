# Laravel Login Form

A simple Laravel login form built with a Blade template, external CSS, and a web route. The form provides fields for email address and password, along with remember-me and forgot-password options.

## Files

```text
login-form/
├── resources/
│   └── views/
│       └── login.blade.php
│
├── public/
│   └── css/
│       └── login.css
│
└── routes/
    └── web.php
```

### `login.blade.php`

Contains the login form UI.

The form includes:

- Email Address
- Password
- Forgot Password link
- Remember Me checkbox
- Sign In button
- Create Account link

The form uses HTML `required` validation and is submitted using the `POST` method.

The external stylesheet is loaded using Laravel's `asset()` helper:

```blade
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
```

### `login.css`

Contains the external styling for the login form, including:

- Login card layout
- Form fields
- Labels
- Login button
- Remember-me section
- Links
- Focus and hover states
- Responsive mobile layout

### `web.php`

Defines the route used to display the login form:

```php
Route::view('/login', 'login');
```

## Setup

1. Create or open a Laravel project.

2. Place `login.blade.php` in:

```text
resources/views/
```

3. Place `login.css` in:

```text
public/css/
```

4. Add the provided route to:

```text
routes/web.php
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. Open the login form in your browser:

```text
http://127.0.0.1:8000/login
```

## Testing

Open:

```text
http://127.0.0.1:8000/login
```

Enter an email address and password.

The email and password fields are required.

Click **Sign In** to test the form submission.

> Note: This example provides the login form UI and Laravel route. It does not authenticate users, validate credentials against a database, create sessions, or implement Laravel authentication.

## Form Submission with SmartFormify

The login form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="login-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Login Form
        ↓
SmartFormify Endpoint URL
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the login form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/login.blade.php
```

7. Find:

```html
action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
```

8. Replace it with your copied SmartFormify Endpoint URL.

For example:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="login-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the login form UI and route. SmartFormify can be used to handle the form submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/login.blade.php
```

You can customize the visual design by editing:

```text
public/css/login.css
```

You can change:

- Form fields
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Forgot Password link
- Create Account link
- Validation requirements
- SmartFormify endpoint URL