<div class="flex flex-row w-11/12">
    <form action="/search" method="post" class="flex flex-row w-full space-x-4">
        @csrf
        <input type="search" name="search" placeholder="Search Name" class="border w-full text-gray-500 px-2 font-light border-indigo-300 bg-indigo-50 rounded focus:ring-2 h-8">
        <input type="submit" class="bg-blue-700 hover:bg-blue-900 border border-indigo-200 text-blue-50 font-semibold rounded h-8 w-40" value="Search">
        <div class="flex flex-row justify-center">
            @if (Auth::user()->is_admin==1)
            <a href="#create" rel="modal:open" class=" text-green-50 bg-green-700 hover:bg-green-900 font-semibold border border-green-600 text-center rounded h-8 w-28 pt-0.5">Add Member</a>
            @endif
        </div>
    </form>
</div>