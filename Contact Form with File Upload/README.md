# Laravel Contact Form with File Upload

A simple Laravel contact form built with a Blade template and a web route. The form includes contact information, message fields, a file upload option, and consent validation.

## Files

```text
resources/
└── views/
    └── contact_form_with_file_upload.blade.php

routes/
└── web.php
```

### `contact_form_with_file_upload.blade.php`

Contains the contact form UI, styling, responsive layout, file upload interface, and client-side file validation.

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Subject
- Message
- Attachment
- Consent checkbox
- Send Message button

The attachment field accepts:

- PDF
- DOC
- DOCX
- JPG
- JPEG
- PNG

The form allows files up to **10 MB** and uses:

```html
enctype="multipart/form-data"
```

which is required for submitting files.

The form is submitted using the `POST` method.

### `web.php`

Defines the route used to display the form:

```php
Route::view('/upload-file', 'contact_form_with_file_upload');
```

## Setup

1. Create or open a Laravel project.

2. Place `contact_form_with_file_upload.blade.php` in:

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

5. Open the form in your browser:

```text
http://127.0.0.1:8000/upload-file
```

## Testing

Open:

```text
http://127.0.0.1:8000/upload-file
```

Enter the required contact information and message.

You can also select an attachment using the file upload area.

The form allows:

```text
PDF, DOC, DOCX, JPG, JPEG, PNG
```

Files larger than **10 MB** are rejected by the client-side JavaScript validation.

Click **Send Message** to submit the form.

> Note: This example provides the form UI and Laravel route. It does not include Laravel backend processing, database storage, or email handling.

## Form Submission with SmartFormify

The form is configured with a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    enctype="multipart/form-data"
>
```

The `multipart/form-data` encoding allows the form to submit the selected attachment together with the other form fields.

### Use SmartFormify

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller, mail service, or custom API code.

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

### SmartFormify Setup

Follow these steps to connect the form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/contact_form_with_file_upload.blade.php
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
    enctype="multipart/form-data"
>
```

After replacing the placeholder, the form can submit the contact information and selected attachment to the configured endpoint.

> **Note:** The Laravel files in this example only provide the form UI and route. SmartFormify handles the submission workflow when a valid SmartFormify endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/contact_form_with_file_upload.blade.php
```

You can change:

- Form fields
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Contact information
- Accepted file types
- File size limit
- Validation requirements

The form currently uses the attachment field:

```html
<input
    type="file"
    id="attachment"
    name="attachment"
    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
>
```