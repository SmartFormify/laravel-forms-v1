# Laravel Job Application Form

A professional Laravel job application form built with a Blade template, external CSS, and a web route. The form allows applicants to provide their personal information, select a position, describe their experience, upload a resume, and submit their application.

## Files

```text
job-application-form/
├── resources/
│   └── views/
│       └── job_application.blade.php
│
├── public/
│   └── css/
│       └── job_application.css
│
└── routes/
    └── web.php
```

### `job_application.blade.php`

Contains the job application form UI.

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Position
- Experience
- Portfolio / LinkedIn URL
- Cover Letter
- Resume / CV
- Application consent
- Submit Application button

The resume upload accepts:

- PDF
- DOC
- DOCX

The client-side file validation limits the resume size to **10 MB**.

The form uses:

```html
method="POST"
enctype="multipart/form-data"
```

`multipart/form-data` is required to submit the uploaded resume with the other form fields.

### `job_application.css`

Contains the external styling for the job application form, including:

- Application card layout
- Section headers
- Form fields
- File upload area
- Consent section
- Submit button
- Hover and focus states
- Responsive mobile layout

### `web.php`

Defines the route used to display the job application form:

```php
Route::view('/job-application', 'job_application');
```

## Setup

1. Create or open a Laravel project.

2. Place `job_application.blade.php` in:

```text
resources/views/
```

3. Place `job_application.css` in:

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

6. Open the form in your browser:

```text
http://127.0.0.1:8000/job-application
```

## Testing

Open:

```text
http://127.0.0.1:8000/job-application
```

Complete the required application fields.

The following fields are required:

- First Name
- Last Name
- Email Address
- Phone Number
- Position
- Experience
- Cover Letter
- Resume / CV
- Application consent

Select a resume file in PDF, DOC, or DOCX format.

The form checks that the selected resume does not exceed **10 MB**.

Click **Submit Application** to test the form submission.

> Note: This example provides the form UI and Laravel route. It does not store applications, upload files to a server, send emails, or provide recruitment functionality unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The job application form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    enctype="multipart/form-data"
    class="application-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Job Application Form
           ↓
SmartFormify Endpoint URL
           ↓
Submission Processing
           ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the job application form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/job_application.blade.php
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
    class="application-form"
>
```

Keep the form method as:

```html
method="POST"
```

Keep:

```html
enctype="multipart/form-data"
```

because it is required for submitting the resume file.

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the job application form UI and route. SmartFormify can be used to handle the submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/job_application.blade.php
```

You can customize the visual design by editing:

```text
public/css/job_application.css
```

You can change:

- Form fields
- Position options
- Experience options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Accepted resume file types
- File size limit
- Consent text
- SmartFormify endpoint URL