<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Inter, Arial, sans-serif;
            background: #f5f7fb;
            color: #172033;
            line-height: 1.5;
        }

        .contact-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
        }

        .contact-wrapper {
            width: 100%;
            max-width: 1050px;
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(20, 30, 55, 0.08);
        }

        /* Left Side */
        .contact-info {
            background: #0f56fc;
            color: #ffffff;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contact-info h1 {
            font-size: 36px;
            line-height: 1.15;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .contact-info> div> p {
            color: rgba(255, 255, 255, 0.82);
            font-size: 15px;
            max-width: 360px;
        }

        .contact-details {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .contact-detail {
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.14);
            border-radius: 10px;
            font-size: 17px;
        }

        .contact-detail strong {
            display: block;
            font-size: 14px;
            margin-bottom: 3px;
        }

        .contact-detail span {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.75);
        }

        /* Form */
        .contact-form {
            padding: 50px;
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header h2 {
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .form-header p {
            color: #737b8c;
            font-size: 14px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #30394d;
            margin-bottom: 7px;
        }

        .required {
            color: #e5484d;
        }

        input,
        textarea,
        select {
            width: 100%;
            border: 1px solid #dfe3eb;
            background: #ffffff;
            border-radius: 9px;
            padding: 12px 13px;
            font-family: inherit;
            font-size: 14px;
            color: #172033;
            outline: none;
            transition: 0.2s ease;
        }

        input {
            height: 46px;
        }

        textarea {
            min-height: 125px;
            resize: vertical;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #0f56fc;
            box-shadow: 0 0 0 3px rgba(15, 86, 252, 0.08);
        }

        /* File Upload */
        .file-upload {
            position: relative;
            border: 1.5px dashed #cbd2df;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background: #fafbfc;
            transition: 0.2s ease;
            cursor: pointer;
        }

        .file-upload:hover {
            border-color: #0f56fc;
            background: #f7f9ff;
        }

        .file-upload input[type="file"] {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .upload-icon {
            width: 40px;
            height: 40px;
            margin: 0 auto 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #edf3ff;
            color: #0f56fc;
            border-radius: 10px;
            font-size: 19px;
        }

        .upload-title {
            font-size: 13px;
            font-weight: 600;
            color: #30394d;
        }

        .upload-text {
            margin-top: 3px;
            font-size: 12px;
            color: #8a92a3;
        }

        #file-name {
            margin-top: 8px;
            font-size: 12px;
            color: #0f56fc;
            font-weight: 500;
            word-break: break-word;
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            margin: 4px 0 20px;
        }

        .checkbox-group input {
            width: 16px;
            height: 16px;
            margin-top: 2px;
            accent-color: #0f56fc;
        }

        .checkbox-group label {
            margin: 0;
            font-size: 12px;
            font-weight: 400;
            color: #737b8c;
        }

        /* Button */
        .submit-button {
            width: 100%;
            height: 48px;
            border: 0;
            border-radius: 9px;
            background: #0f56fc;
            color: #ffffff;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .submit-button:hover {
            background: #0847d8;
            transform: translateY(-1px);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 800px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
            }

            .contact-info {
                padding: 35px 30px;
            }

            .contact-info h1 {
                font-size: 30px;
            }

            .contact-details {
                margin-top: 30px;
            }

            .contact-form {
                padding: 35px 30px;
            }
        }

        @media (max-width: 550px) {
            .contact-section {
                padding: 20px 12px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .contact-info,
            .contact-form {
                padding: 28px 22px;
            }

            .contact-info h1 {
                font-size: 27px;
            }
        }
    </style>
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