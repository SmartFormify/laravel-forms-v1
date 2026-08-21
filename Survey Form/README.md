# Laravel Survey Form

A professional Laravel survey form built with a Blade template, external CSS, and a web route. The form allows users to provide basic information, rate their experience, answer product-related questions, and share additional feedback.

## Files

```text
survey-form/
├── resources/
│   └── views/
│       └── survey.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

### `survey.blade.php`

Contains the survey form UI.

The form includes:

- Full Name
- Email Address
- Overall Satisfaction Rating
- Product Usage Frequency
- Ease of Use Rating
- Favorite Product Feature
- Improvement Suggestions
- Recommendation Score
- Additional Comments
- Contact Permission
- Submit Survey button

The following fields are required:

- Overall Satisfaction Rating
- Product Usage Frequency
- Ease of Use Rating
- Recommendation Score

The form uses HTML `required` validation and is submitted using the `POST` method.

The external stylesheet is loaded using Laravel's `asset()` helper:

```blade
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
```

### `style.css`

Contains the external styling for the survey form, including:

- Survey card layout
- Section headers
- Form fields
- Satisfaction rating controls
- Radio button options
- Textareas
- Consent section
- Submit button
- Hover and focus states
- Responsive mobile layout

### `web.php`

Defines the route used to display the survey form:

```php
Route::view('/survey', 'survey');
```

## Setup

1. Create or open a Laravel project.

2. Place `survey.blade.php` in:

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

6. Open the survey form in your browser:

```text
http://127.0.0.1:8000/survey
```

## Testing

Open:

```text
http://127.0.0.1:8000/survey
```

Complete the required survey questions.

Select an answer for:

- Satisfaction rating
- Product usage frequency
- Ease of use
- Recommendation score

You can also provide optional comments and contact information.

Click **Submit Survey** to test the form submission.

> Note: This example provides the survey UI and Laravel route. It does not store responses, calculate survey results, generate reports, or provide survey analytics unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The survey form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="survey-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Survey Form
        ↓
SmartFormify Endpoint URL
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the survey form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/survey.blade.php
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
    class="survey-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the survey form UI and route. SmartFormify can be used to handle the submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/survey.blade.php
```

You can customize the visual design by editing:

```text
public/css/style.css
```

You can change:

- Survey questions
- Rating options
- Product usage options
- Recommendation options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify endpoint URL