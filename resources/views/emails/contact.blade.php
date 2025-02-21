<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #93bc32;
            padding: 20px;
            text-align: center;
            color: white;
        }
        .header img {
            max-width: 150px;
            display: block;
            margin: 0 auto 10px;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #666;
        }
        .footer a {
            color: #93bc32;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header with Logo -->
        <div class="header">
            <img src="{{ asset('/storage/images/logo.png') }}" alt="Website Logo">
            <h2>{{ config('app.name') }}</h2>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h3>New Contact Message</h3>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ nl2br(e($messageContent)) }}</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved. <br>
            <a href="{{ url(config('app.url')) }}">Visit Our Website</a>
        </div>
    </div>
</body>
</html>
