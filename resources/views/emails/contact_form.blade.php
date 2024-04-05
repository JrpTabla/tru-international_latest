<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>First Name: {{ $formData['first_name'] }}</p>
    <p>Last Name: {{ $formData['last_name'] }}</p>
    <p>Email: {{ $formData['email'] }}</p>
    <p>Phone: {{ $formData['phone'] }}</p>
    <p>Message: {{ $formData['message'] }}</p>
</body>
</html>