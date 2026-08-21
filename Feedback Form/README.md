# Laravel Feedback Form

A professional Laravel feedback form built with a Blade template, external CSS, and a web route. The form allows users to share feedback, rate their experience, select a feedback type, and optionally provide contact information.

## Files

```text
feedback-form/
├── resources/
│   └── views/
│       └── feedback.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

### `feedback.blade.php`

Contains the feedback form UI.

The form includes:

- Full Name
- Email Address
- Feedback Type
- Experience Rating
- Feedback Message
- Recommendation
- Contact Permission
- Submit Feedback button

The following fields are required:

- Feedback Type
- Experience Rating
- Feedback Message

The form uses HTML `required` validation and is submitted using the `POST` method.

The external stylesheet is loaded using Laravel's `asset()` helper:

```blade
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
```

### `style.css`

Contains the external styling for the feedback form, including:

- Feedback card layout
- Section headers
- Form fields
- Experience rating controls
- Consent section
- Submit button
- Hover and focus states
- Responsive mobile layout

### `web.php`

Defines the route used to display the feedback form:

```php
Route::view('/feedback', 'feedback');
```

## Setup

1. Create or open a Laravel project.

2. Place `feedback.blade.php` in:

```text
resources/views/
```

3. Place `style.css` in:

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

6. Open the feedback form in your browser:

```text
http://127.0.0.1:8000/feedback
```

## Testing

Open:

```text
http://127.0.0.1:8000/feedback
```

Complete the required feedback fields.

Select:

- Feedback Type
- Experience Rating

Then enter your feedback message and click **Submit Feedback**.

You can optionally provide your name, email address, recommendation, and permission to be contacted.

> Note: This example provides the feedback form UI and Laravel route. It does not store feedback, send notifications, or create a feedback management system unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The feedback form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="feedback-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Feedback Form
        ↓
SmartFormify Endpoint URL
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the feedback form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/feedback.blade.php
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
    class="feedback-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the feedback form UI and route. SmartFormify can be used to handle the submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/feedback.blade.php
```

You can customize the visual design by editing:

```text
public/css/style.css
```

You can change:

- Form fields
- Feedback type options
- Rating options
- Recommendation options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify endpoint URL