<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/auth/auth.css') }}">

</head>
<body>

    <div class="w-100 d-flex">
        <button type="button" class="btn ms-auto btn-Goback" onclick="goBack()">Go Back</button>
    </div>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />


    @yield('content')
    
    

<script>
    function goBack() {
        window.history.back();
    }
</script>


</body>
</html>