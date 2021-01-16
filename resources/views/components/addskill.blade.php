<div class="flex flex-col space-y-4">
    <div class="flex flex-row justify-center">
        <h1 class="font-sans text-xl font-bold text-gray-700">Add Skills</h1>
    </div>

    <form action="/addskill" method="post" class="flex flex-col space-y-2">
        @csrf
        <label for="name" class="text-gray-900 font-semibold">Name</label>
        <input type="text" name="name" placeholder="First Name Last Name" class="border-b" required>

        <label for="description" class="text-gray-900 font-semibold">Description</label>
        <input type="hidden" name="description" value="">
        <textarea name="description" cols="30" rows="5" class="border border-gray-400 px-2 py-2" placeholder="Project 1, Project 2..."></textarea>
        <div class="flex flex-row justify-end">
            <button type="submit" class="border-indigo-800 bg-indigo-900 text-blue-50 font-semibold w-28 h-8 rounded-sm">Submit</button>
        </div>
    </form>
</div>