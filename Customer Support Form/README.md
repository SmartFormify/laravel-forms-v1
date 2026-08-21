# Laravel Customer Support Form

A professional Laravel customer support form built with a Blade template, external CSS, and a web route. The form allows customers to submit support requests with their contact information, issue category, priority, subject, and detailed message.

## Files

```text
customer-support-form/
├── resources/
│   └── views/
│       └── customer_support.blade.php
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
- Support Category
- Priority
- Order / Account ID
- Subject
- Support Message
- Additional Notes
- Contact Permission

### Required Fields

The following fields are required:

- First Name
- Last Name
- Email Address
- Support Category
- Priority
- Subject
- Support Message

The form uses HTML `required` validation and submits data using the `POST` method.

## Setup

1. Create or open a Laravel project.

2. Place the Blade file in:

```text
resources/views/customer_support.blade.php
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

Route::view('/customer-support', 'customer_support');
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. Open the form:

```text
http://127.0.0.1:8000/customer-support
```

## Testing

Open:

```text
http://127.0.0.1:8000/customer-support
```

Complete the required support information and click **Submit Support Request**.

Optional fields include:

- Phone Number
- Order / Account ID
- Additional Notes

> Note: This example provides the customer support form UI and Laravel route only. It does not create support tickets, store requests, send emails, or provide a support dashboard.

## SmartFormify Integration

The form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="support-form"
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
resources/views/customer_support.blade.php
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
    class="support-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields configured for your SmartFormify endpoint.

### Submission Flow

```text
Laravel Customer Support Form
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
resources/views/customer_support.blade.php
```

Edit the external stylesheet to customize the design:

```text
public/css/style.css
```

You can customize:

- Support categories
- Priority options
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