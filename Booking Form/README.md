# Laravel Booking Form

A professional Laravel booking form built with a Blade template, external CSS, and a web route. The form allows visitors to provide their contact information, select a service, choose a preferred date and time, specify the number of people, and add additional notes.

## Files

```text
booking-form/
├── resources/
│   └── views/
│       └── booking.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

### `booking.blade.php`

Contains the booking form UI.

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Service
- Preferred Date
- Preferred Time
- Number of People
- Notes
- Booking consent
- Request Appointment button

The form uses HTML validation for required fields and is submitted using the `POST` method.

### `booking.css`

Contains the external styling for the booking form, including:

- Booking card layout
- Section headers
- Form fields
- Date and time controls
- Notes textarea
- Consent section
- Submit button
- Hover and focus states
- Responsive mobile layout

### `web.php`

Defines the route used to display the booking form:

```php
Route::view('/booking', 'booking');
```

## Setup

1. Create or open a Laravel project.

2. Place `booking.blade.php` in:

```text
resources/views/
```

3. Place `booking.css` in:

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

6. Open the booking form in your browser:

```text
http://127.0.0.1:8000/booking
```

## Testing

Open:

```text
http://127.0.0.1:8000/booking
```

Complete the required booking information.

The following fields are required:

- First Name
- Last Name
- Email Address
- Phone Number
- Service
- Preferred Date
- Preferred Time
- Booking consent

Select the desired service, date, and time, then click **Request Appointment** to test the form submission.

> Note: This example provides the booking form UI and Laravel route. It does not check real-time availability, store appointments, send confirmation emails, or manage a calendar unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The booking form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="booking-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Booking Form
        ↓
SmartFormify Endpoint URL
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the booking form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/booking.blade.php
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
    class="booking-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the booking form UI and route. SmartFormify can be used to handle the submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/booking.blade.php
```

You can customize the visual design by editing:

```text
public/css/booking.css
```

You can change:

- Form fields
- Service options
- Available time options
- Number of people options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify endpoint URL