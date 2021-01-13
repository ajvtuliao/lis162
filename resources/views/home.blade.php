<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP Intech Membership Monitoring System</title>
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <script src="{{ asset('js\app.js') }}"></script>
</head>

<body class="bg-gray-50">
    <div class="flex flex-col space-y-4">
        <x-header class="bg-indigo-50"></x-header>
        <div class="flex flex-row justify-center ">
            <x-search></x-search>
        </div>
        @if (Auth::user()->is_admin==0)
        <x-usertable :members="$members"></x-usertable>
        @else
        <x-admintable :members="$members"></x-admintable>
        @endif
    </div>
</body>

</html>