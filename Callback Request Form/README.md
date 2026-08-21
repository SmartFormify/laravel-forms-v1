# Laravel Callback Request Form

A professional Laravel callback request form built with a Blade template, external CSS, and a web route. The form allows visitors to provide their contact information, select a reason for the callback, choose a preferred date and time, select a contact method, and add additional details.

## Files

```text
callback-request-form/
├── resources/
│   └── views/
│       └── callback_request.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

## Form Fields

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Reason for Callback
- Preferred Date
- Preferred Time
- Preferred Contact Method
- Message
- Consent Checkbox

### Required Fields

The following fields are required:

- First Name
- Last Name
- Email Address
- Phone Number
- Reason for Callback
- Preferred Date
- Preferred Time
- Preferred Contact Method
- Consent

The form uses HTML `required` validation and submits data using the `POST` method.

## Setup

1. Create or open a Laravel project.

2. Place the Blade file in:

```text
resources/views/callback_request.blade.php
```

3. Place the stylesheet in:

```text
public/css/style.css
```

4. Add the route to:

```text
routes/web.php
```

```php
use Illuminate\Support\Facades\Route;

Route::view('/callback-request', 'callback_request');
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. Open the form:

```text
http://127.0.0.1:8000/callback-request
```

## Testing

Open:

```text
http://127.0.0.1:8000/callback-request
```

Complete the required callback information.

Select:

- Reason for Callback
- Preferred Date
- Preferred Time
- Preferred Contact Method

Then click **Request a Callback** to test the form submission.

> Note: This example provides the callback request UI and Laravel route only. It does not schedule calls, store callback requests, send notifications, or manage a callback queue unless additional Laravel backend functionality is added.

## SmartFormify Integration

The form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="callback-form"
>
```

You can connect the form to SmartFormify by replacing the placeholder with your SmartFormify Endpoint URL.

### SmartFormify Setup

1. Sign up or log in to SmartFormify.
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Create your endpoint.
5. Copy the generated **Endpoint URL**.
6. Open:

```text
resources/views/callback_request.blade.php
```

7. Find:

```html
action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
```

8. Replace it with your copied Endpoint URL.

For example:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="callback-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields configured for your SmartFormify endpoint.

### Submission Flow

```text
Laravel Callback Request Form
            ↓
SmartFormify Endpoint
            ↓
Submission Processing
            ↓
Email / Notifications / Response
```

## Requirements

- PHP
- Composer
- Laravel

## Customization

Edit the Blade template to change the form fields:

```text
resources/views/callback_request.blade.php
```

Edit the external stylesheet to customize the design:

```text
public/css/style.css
```

You can customize:

- Callback reasons
- Available dates
- Available time options
- Contact methods
- Form fields
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify Endpoint URL
```