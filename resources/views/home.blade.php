<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP Intech Membership Monitoring System</title>
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <script src="{{ asset('js\app.js') }}"></script>
</head>

<body>
    <div class="flex flex-col space-y-4">
        <x-header class="bg-indigo-50"></x-header>
        <div class="flex flex-row justify-center ">
            <x-search></x-search>
        </div>
        <div class="flex flex-row justify-center space-x-8">
            @if (Auth::user()->is_admin==1)
            <a href="#create" rel="modal:open" class="bg-white hover:bg-gray-200 md:w-2/12 border border-black md:text-lg text-center">Add Member</a>
            @endif
            <a href="/logout" class="bg-white hover:bg-gray-200 md:w-2/12 border border-black md:text-lg text-center">Logout</a>
        </div>
        @if (Auth::user()->is_admin==0)
        <x-usertable :members="$members"></x-usertable>
        @else
        <x-admintable :members="$members"></x-admintable>
        @endif
    </div>
</body>

</html>