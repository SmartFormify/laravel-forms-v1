# Laravel Appointment Form

A professional Laravel appointment form built with a Blade template, external CSS, and a web route. The form allows visitors to provide their contact information, select an appointment type, choose a preferred date and time, select a contact method, and add additional notes.

## Files

```text
appointment-form/
├── resources/
│   └── views/
│       └── appointment.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

### `appointment.blade.php`

Contains the appointment form UI.

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Appointment Type
- Preferred Date
- Preferred Time
- Preferred Contact Method
- Notes
- Appointment consent
- Schedule Appointment button

The form uses HTML `required` validation and is submitted using the `POST` method.

The external stylesheet is loaded using Laravel's `asset()` helper:

```blade
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
```

### `style.css`

Contains the external styling for the appointment form, including:

- Appointment card layout
- Section headers
- Form fields
- Date and time controls
- Notes textarea
- Consent section
- Submit button
- Hover and focus states
- Responsive mobile layout

### `web.php`

Defines the route used to display the appointment form:

```php
Route::view('/appointment', 'appointment');
```

## Setup

1. Create or open a Laravel project.

2. Place `appointment.blade.php` in:

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

6. Open the appointment form in your browser:

```text
http://127.0.0.1:8000/appointment
```

## Testing

Open:

```text
http://127.0.0.1:8000/appointment
```

Complete the required appointment information.

The following fields are required:

- First Name
- Last Name
- Email Address
- Phone Number
- Appointment Type
- Preferred Date
- Preferred Time
- Preferred Contact Method
- Appointment consent

Select the desired appointment type, date, time, and contact method, then click **Schedule Appointment** to test the form submission.

> Note: This example provides the appointment form UI and Laravel route. It does not check real-time availability, store appointments, send confirmation emails, or connect to a calendar unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The appointment form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="appointment-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Appointment Form
        ↓
SmartFormify Endpoint URL
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the appointment form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/appointment.blade.php
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
    class="appointment-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the appointment form UI and route. SmartFormify can be used to handle the submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/appointment.blade.php
```

You can customize the visual design by editing:

```text
public/css/style.css
```

You can change:

- Form fields
- Appointment type options
- Available time options
- Contact method options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify endpoint URL