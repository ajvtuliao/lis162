<div class="flex flex-col space-y-4">
    <div class="flex flex-row justify-center">
        <h1 class="font-sans text-xl font-bold text-gray-700">Add Member Details</h1>
    </div>
    <div class="flex flex-row space-x-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/user.svg') }}" alt="">
        </div>
        <form action="/create" method="post" class="flex flex-col space-y-2">
            @csrf
            <label for="name" class="text-gray-900 font-semibold">Name</label>
            <input type="text" name="name" placeholder="First Name Last Name" class="border-b" required>
            <label for="date" class="text-gray-900 font-semibold">Date of Membership</label>
            <input type="date" name="date" class="border-b" required>
            <label for="status" class="text-gray-900 font-semibold">Membership Status</label>
            <select name="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Alumni">Alumni</option>
                <option value="Moderator">Moderator</option>
                <option value="Applicant">Applicant</option>
            </select>
    </div>

    <label for="current" class="text-gray-900 font-semibold">Current Projects</label>
    <input type="hidden" name="current" value="">
    <textarea name="current" cols="30" rows="5" class="border border-gray-400 px-2 py-2" placeholder="Project 1, Project 2..."></textarea>
    <div class="flex flex-row justify-end">
        <button type="submit" class="border-indigo-800 bg-indigo-900 text-blue-50 font-semibold w-28 h-8 rounded-sm">Submit</button>
    </div>
    </form>
</div>