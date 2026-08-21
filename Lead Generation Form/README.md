# Laravel Lead Generation Form

A professional Laravel lead generation form built with a Blade template, external CSS, and a web route. The form collects contact information, company details, business interests, and additional information from potential leads.

## Files

```text
lead-generation-form/
├── resources/
│   └── views/
│       └── lead_generation.blade.php
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
- Work Email
- Phone Number
- Company Name
- Company Size
- Industry
- Primary Interest
- Additional Message
- Consent Checkbox

### Required Fields

The following fields are required:

- First Name
- Last Name
- Work Email
- Company Name
- Primary Interest
- Consent

The form uses HTML validation and submits data using the `POST` method.

## Setup

1. Create or open a Laravel project.

2. Place the Blade file in:

```text
resources/views/lead_generation.blade.php
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

Route::view('/lead-generation', 'lead_generation');
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. Open the form:

```text
http://127.0.0.1:8000/lead-generation
```

## Testing

Open:

```text
http://127.0.0.1:8000/lead-generation
```

Complete the required fields and click **Get Started**.

Optional fields include:

- Phone Number
- Company Size
- Industry
- Additional Message

> Note: This example provides the form UI and Laravel route only. It does not store leads, send emails, connect to a CRM, or provide lead analytics.

## SmartFormify Integration

The form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="lead-form"
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
resources/views/lead_generation.blade.php
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
    class="lead-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields configured for your SmartFormify endpoint.

### Submission Flow

```text
Laravel Lead Generation Form
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
resources/views/lead_generation.blade.php
```

Edit the external stylesheet to customize the design:

```text
public/css/style.css
```

You can customize:

- Form fields
- Company size options
- Industry options
- Interest options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify Endpoint URL
```