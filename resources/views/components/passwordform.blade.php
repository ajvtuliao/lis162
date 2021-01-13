<div class="flex flex-col justify-center w-2/3 md:w-1/2">
    <div class="border-gray-300 shadow-md border bg-gray-100 mt-12 mb-8">
        <form action="{{ $action }}" method="POST" class="flex flex-col space-y-4 p-1 md:p-16">
            @csrf
            @if ($formtype=='Register')
            <label for="name" class="font-semibold text-gray-600">Name</label>
            <input type="text" name="name" class="border-b px-2">
            @endif
            <label for="email" class="font-semibold text-gray-600">Email</label>
            <input type="text" name="email" class="border-b px-2 w-full">
            <label for="password" class="font-semibold text-gray-600">Password</label>
            <input type="password" name="password" class="border-b px-2">
            @if ($formtype=='Register')
            <label for="password_confirmation" class="font-semibold text-gray-600">Confirm Password</label>
            <input type="password" name="password_confirmation" class="border-b px-2">
            <div class="flex flex-row space-x-4">
            <label for="is_admin" class="font-semibold text-gray-600">Admin?</label>
            <input type="hidden" name="is_admin" value="0">
                <input type="checkbox" name="is_admin" value="1" class="mt-1">
            </div>
            @endif
            <div class="flex flex-row justify-center space-x-4">
                <input type="submit" value="{{ $formtype }}" class=" bg-blue-800 hover:bg-blue-900 md:w-2/12 border border-blue-700 md:text-lg text-center text-blue-50 font-semibold rounded w-28">
                <a href="/{{ strtolower($altformtype) }}" class="bg-green-800 hover:bg-green-900 md:w-2/12 border border-green-700 md:text-lg text-center text-green-50 font-semibold rounded w-28">{{ $altformtype }}</a>
            </div>
        </form>
    </div>
</div>