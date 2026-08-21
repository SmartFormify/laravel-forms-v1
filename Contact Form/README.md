# Laravel Contact Form

A simple Laravel contact form built with a Blade template and a web route. The form provides fields for a user's name, email address, subject, and message.

## Files

```text
contact-form/
├── resources/
│   └── views/
│       └── contact_form.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

### `contact_form.blade.php`

Contains the contact form UI and styling. The form includes:

- Full Name
- Email Address
- Subject
- Message
- Send Message button

The form uses HTML `required` validation and is submitted using the `POST` method.

### `web.php`

Defines the web route used to display the contact form.

## Setup

1. Create or open a Laravel project.
2. Place `contact_form.blade.php` in:

```text
resources/views/
```

3. Add the provided route to:

```text
routes/web.php
```

4. Start the Laravel development server:

```bash
php artisan serve
```

5. Open the URL shown by Laravel, for example:

```text
http://127.0.0.1:8000/
```

## Testing

Open the contact form in your browser and enter values in all fields.

Click **Send Message** to test the form submission.

> Note: This example only provides the form UI and route. It does not send an email or store the submitted data unless a controller, mail configuration, database logic, or API endpoint is added.


## Form Submission with SmartFormify

The form and Laravel route are already created, but the current example does **not** include backend processing for the submitted form data.

For a complete custom Laravel submission flow, you would normally need to build backend functionality for:

- Processing form submissions
- Sending emails
- Sending notifications
- Handling and returning submission responses
- Connecting the form to an API or other backend service

### Use SmartFormify Instead

If you already have a **SmartFormify endpoint URL**, you can make the form fully functional without creating a Laravel controller, mail service, or custom API code.

The basic flow is:

```text
Laravel Blade Form
       ↓
SmartFormify Endpoint URL
       ↓
Submission Processing
       ↓
Email / Notifications / Response
```

Simply use your SmartFormify endpoint URL as the form's `action`:

This approach keeps the Laravel example simple while allowing SmartFormify to handle the submission workflow.

### SmartFormify Setup

Follow these steps to connect the contact form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open `contact_form.blade.php`.
7. Replace the form's current `action` value with the copied Endpoint URL:

For example:

```html
<form action="YOUR_SMARTFORMIFY_ENDPOINT_URL" method="POST">
```

With this setup, you do not need to create a Laravel controller, mail service, or custom API integration just to process this form submission.

> **Note:** The Laravel files in this example only define the form UI and route. SmartFormify is a submission solution for handling the backend workflow.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/contact_form.blade.php
```

For example, you can change the:

- Form fields
- Labels and placeholders
- Button text
- Colors
- Layout
- Validation requirements

To process submitted data, update the route in `routes/web.php` or connect the form to a Laravel controller.