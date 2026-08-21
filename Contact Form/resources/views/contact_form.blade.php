<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="contact-card">

        <div class="contact-header">
            <h1>Get in Touch</h1>
            <p>Have a question or need assistance? Fill out the form below and we'll get back to you shortly.</p>
        </div>
        <form action="https://api.smartformify.com/fe/YOUR_FORM_ENDPOINT" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="How can we help?" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" class="submit-button">Send Message</button>
        </form>

    </div>

</body>
</html>