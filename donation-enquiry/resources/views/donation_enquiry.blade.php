<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Donation Enquiry</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        button {
            padding: 10px 24px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Donation Enquiry</h1>

    <form
        action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
        method="POST"
    >

        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            required
        >

        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            required
        >

        <label for="phone">Phone</label>
        <input
            type="tel"
            id="phone"
            name="phone"
        >

        <label for="donation_type">Donation Type</label>
        <select
            id="donation_type"
            name="donation_type"
            required
        >
            <option value="">Select donation type</option>
            <option value="one_time">One-time Donation</option>
            <option value="monthly">Monthly Donation</option>
            <option value="in_kind">In-kind Donation</option>
            <option value="other">Other</option>
        </select>

        <label for="amount">Donation Amount</label>
        <input
            type="number"
            id="amount"
            name="amount"
            min="0"
            step="0.01"
        >

        <label for="message">Enquiry / Message</label>
        <textarea
            id="message"
            name="message"
            required
        ></textarea>

        <button type="submit">
            Submit Enquiry
        </button>

    </form>

</body>
</html>