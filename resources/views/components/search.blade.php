<div class="flex flex-row w-11/12">
    <form action="/search" method="post" class="flex flex-row w-full space-x-4">
        @csrf
        <input type="search" name="search" class="border w-full text-2xl border-black focus:ring-2">
        <input type="submit" class="bg-white hover:bg-gray-200 w-1/6 border border-black rounded" value="Search">
    </form>
</div>