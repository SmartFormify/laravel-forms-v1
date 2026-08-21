# Laravel Registration Form

A simple Laravel registration form built with a Blade template, external CSS, and a web route. The form provides fields for creating a user account, including personal information, account type, password, and terms acceptance.

## Files

```text
registration-form/
├── resources/
│   └── views/
│       └── registration.blade.php
│
├── public/
│   └── css/
│       └── registration.css
│
└── routes/
    └── web.php
```

### `registration.blade.php`

Contains the registration form UI.

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Account Type
- Password
- Confirm Password
- Terms and Privacy Policy checkbox
- Create Account button

The form uses HTML validation such as `required` and a minimum password length of 8 characters.

The form uses the `POST` method for submission.

### `registration.css`

Contains the external styling for the registration form, including:

- Registration card layout
- Form fields
- Labels
- Buttons
- Terms section
- Responsive mobile layout
- Hover and focus states

The CSS is loaded in the Blade template using Laravel's `asset()` helper.

### `web.php`

Defines the route used to display the registration form:

```php
Route::view('/registration', 'registration');
```

## Setup

1. Create or open a Laravel project.

2. Place `registration.blade.php` in:

```text
resources/views/
```

3. Place `registration.css` in:

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

6. Open the registration form in your browser:

```text
http://127.0.0.1:8000/registration
```

## Testing

Open:

```text
http://127.0.0.1:8000/registration
```

Enter the required information and test the form validation.

The following fields are required:

- First Name
- Last Name
- Email Address
- Account Type
- Password
- Confirm Password
- Terms and Privacy Policy

The password fields require at least 8 characters.

Click **Create Account** to submit the form.

> Note: This example provides the registration form UI and Laravel route. It does not create users, store registration data, authenticate users, or connect to a database unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The registration form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="registration-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller, database logic, or custom API integration.

The basic flow is:

```text
Laravel Registration Form
          ↓
SmartFormify Endpoint URL
          ↓
Submission Processing
          ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the registration form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/registration.blade.php
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
    class="registration-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the form UI and route. SmartFormify can be used to handle the form submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/registration.blade.php
```

You can customize the visual design by editing:

```text
public/css/registration.css
```

You can change:

- Form fields
- Labels
- Placeholders
- Account types
- Button text
- Colors
- Layout
- Responsive styles
- Validation requirements
- Terms and privacy links
- SmartFormify endpoint URL