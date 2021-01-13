<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP Intech Membership Monitoring Form</title>
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
</head>

<body class="bg-gray-50">
    <div class="flex flex-1 flex-col h-screen items-center space-y-2">
        <x-header></x-header>
        <x-passwordform :action="'/login'" :formtype="'Login'" :altformtype="'Register'" class="mt-2"></x-passwordform>
    </div>
</body>

</html>