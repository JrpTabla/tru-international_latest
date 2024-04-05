<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Page Notification</title>
</head>
<body>

    <p>Good Day!</p>

    <p>We've received interest from a user in the page currently under development or maintenance:</p>

    <p>Email: {{ $formData['email'] }}</p>
    <p>URL: {{ $formData['url'] }}</p>
    <p>Page Title: {{ $formData['page_title'] }}</p>

    <hr>

    <div>
        <img src="{{ asset ('assets/images/logo.png') }}" alt="TRU Logo">
    </div>

</body>
</html>
