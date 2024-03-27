<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Nomad Stay</title>
    <style>
        /* Reset styles */
        body, p, h1 {
            margin: 0;
            padding: 0;
        }

        /* Set body background color */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        /* Container styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header styles */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Logo styles */
        .logo {
            width: 150px;
            height: auto;
        }

        /* Content styles */
        .content {
            margin-bottom: 20px;
        }

        /* Button styles */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Footer styles */
        .footer {
            text-align: center;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src={{asset('images/logo.png')}}
                     alt="Nomad Stay Logo" class="logo">
        </div>
        <div class="content">
            <h1>Welcome to Nomad Stay</h1>
            <p>We have your next remote work stay sorted.</p>
            <p>Dear Nomad,</p>
            <p>Thank you for joining Nomad Stay. We're excited to provide you with the perfect accommodation for your remote work journey.</p>
            <p>Feel free to explore our selection of properties and amenities tailored for remote workers.</p>
            <p>If you have any questions or need assistance, don't hesitate to contact us.</p>
            <p>Click the button below to start your adventure:</p>
            <a href="https://yourwebsite.com/dashboard" class="button">Get Started</a>
        </div>
        <div class="footer">
            <p>Best regards,<br> The Nomad Stay Team</p>
        </div>
    </div>
</body>
</html>
