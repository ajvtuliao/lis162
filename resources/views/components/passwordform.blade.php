<div class="flex flex-col justify-center w-2/3 md:w-1/2">
    <div class="border-black border">
        <form action="{{ $action }}" method="POST" class="flex flex-col space-y-4 p-2 md:p-16">
            @csrf
            @if ($formtype=='Register')
            <label for="name">Name</label>
            <input type="text" name="name" class="border-b">
            @endif
            <label for="email">Email</label>
            <input type="text" name="email" class="border-b w-full">
            <label for="password">Password</label>
            <input type="password" name="password" class="border-b">
            @if ($formtype=='Register')
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="border-b">
            <div class="flex flex-row space-x-4">
            <label for="is_admin">Admin?</label>
            <input type="hidden" name="is_admin" value="0">
                <input type="checkbox" name="is_admin" value="1">
            </div>
            @endif
            <div class="flex flex-row justify-center space-x-4">
                <input type="submit" value="{{ $formtype }}" class=" bg-white hover:bg-gray-200 md:w-2/12 border border-black md:text-lg text-center">
                <a href="/{{ strtolower($altformtype) }}" class="bg-white hover:bg-gray-200 md:w-2/12 border border-black md:text-lg text-center">{{ $altformtype }}</a>
            </div>
        </form>
    </div>
</div>