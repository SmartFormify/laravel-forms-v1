# Laravel Newsletter Signup Form

A simple Laravel newsletter signup form built with a Blade template, external CSS, and a web route. The form allows visitors to subscribe to a newsletter by providing their email address and optional name.

## Files

```text
newsletter-form/
├── resources/
│   └── views/
│       └── newsletter.blade.php
│
├── public/
│   └── css/
│       └── newsletter.css
│
└── routes/
    └── web.php
```

### `newsletter.blade.php`

Contains the newsletter signup form UI.

The form includes:

- Email Address
- Name
- Newsletter consent checkbox
- Subscribe to Newsletter button

The email address and consent checkbox are required.

The form uses the `POST` method for submission.

The external stylesheet is loaded using Laravel's `asset()` helper:

```blade
<link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
```

### `newsletter.css`

Contains the external styling for the newsletter form, including:

- Newsletter card layout
- Form fields
- Labels
- Subscribe button
- Consent section
- Focus and hover states
- Responsive mobile layout

### `web.php`

Defines the route used to display the newsletter form:

```php
Route::view('/newsletter', 'newsletter');
```

## Setup

1. Create or open a Laravel project.

2. Place `newsletter.blade.php` in:

```text
resources/views/
```

3. Place `newsletter.css` in:

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

6. Open the newsletter form in your browser:

```text
http://127.0.0.1:8000/newsletter
```

## Testing

Open:

```text
http://127.0.0.1:8000/newsletter
```

Enter an email address and optionally provide your name.

The following fields are required:

- Email Address
- Newsletter consent

Click **Subscribe to Newsletter** to test the form submission.

> Note: This example provides the newsletter signup UI and Laravel route. It does not store subscribers, send newsletters, or connect to a mailing-list service unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The newsletter form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="newsletter-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Newsletter Form
          ↓
SmartFormify Endpoint URL
          ↓
Submission Processing
          ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the newsletter form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/newsletter.blade.php
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
    class="newsletter-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the newsletter form UI and route. SmartFormify can be used to handle the form submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/newsletter.blade.php
```

You can customize the visual design by editing:

```text
public/css/newsletter.css
```

You can change:

- Form fields
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- Privacy note
- SmartFormify endpoint URL