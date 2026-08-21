<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

    <body>

        <section class="contact-section">
            <div class="contact-wrapper">
                <!-- Contact Information -->
                <div class="contact-info">
                    <div>
                        <h1>Let's start a conversation.</h1>
                        <p>
                            Have a question, project idea, or need assistance?
                            Send us a message and our team will get back to you.
                        </p>
                        <div class="contact-details">
                            <div class="contact-detail">
                                <div class="contact-icon">✉</div>
                                <div>
                                    <strong>Email</strong>
                                    <span>hello@example.com</span>
                                </div>
                            </div>
                            <div class="contact-detail">
                                <div class="contact-icon">☎</div>
                                <div>
                                    <strong>Phone</strong>
                                    <span>+1 (555) 123-4567</span>
                                </div>
                            </div>
                            <div class="contact-detail">
                                <div class="contact-icon">⌖</div>
                                <div>
                                    <strong>Office</strong>
                                    <span>123 Business Street, New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <div class="form-header">
                        <h2>Send us a message</h2>
                        <p>Fill in the details below and we'll be in touch shortly.</p>
                    </div>
                    <!-- Replace action with your SmartFormify endpoint -->
                    <form action="YOUR_SMARTFORMIFY_ENDPOINT_URL" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name <span class="required">*</span></label>
                                <input type="text" id="first_name" name="first_name" placeholder="John" required>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name <span class="required">*</span></label>
                                <input type="text" id="last_name" name="last_name" placeholder="Doe" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 123-4567">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" placeholder="How can we help?" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message <span class="required">*</span></label>
                            <textarea id="message" name="message" placeholder="Tell us a little more about your request..." required></textarea>
                        </div>

                        <!-- File Upload -->
                        <div class="form-group">
                            <label for="attachment">Attachment</label>
                            <div class="file-upload">
                                <input type="file" id="attachment" name="attachment" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                <div class="upload-icon">↑</div>
                                <div class="upload-title">Click to upload a file</div>
                                <div class="upload-text">PDF, DOC, DOCX, JPG or PNG · Max 10 MB</div>
                                <div id="file-name"></div>
                            </div>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="consent" name="consent" value="yes" required>
                            <label for="consent">
                                I agree to the processing of my information
                                for the purpose of responding to my request.
                            </label>
                        </div>
                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
            </div>
        </section>

        <script>
            const fileInput = document.getElementById("attachment");
            const fileName = document.getElementById("file-name");

            fileInput.addEventListener("change", function () {
                if (this.files.length> 0) {
                    const file = this.files[0];

                    // 10 MB validation
                    if (file.size> 10 * 1024 * 1024) {
                        fileName.textContent = "File is larger than 10 MB.";
                        fileName.style.color = "#e5484d";
                        this.value = "";
                        return;
                    }

                    fileName.textContent = "Selected: " + file.name;
                    fileName.style.color = "#0f56fc";
                } else {
                    fileName.textContent = "";
                }
            });
        </script>

    </body>
</html>