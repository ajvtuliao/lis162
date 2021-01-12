<div class="flex flex-col space-y-4">
    <div class="flex flex-row justify-center">
        <h1 class="font-sans text-xl font-bold">Add Member Details</h1>
    </div>
    <div class="flex flex-row space-x-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/user.svg') }}" alt="">
        </div>
        <form action="/create" method="post" class="flex flex-col space-y-2">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" class="border-b" required>
            <label for="date">Date of Membership</label>
            <input type="text" name="date" class="border-b" required>
            <label for="status">Membership Status</label>
            <select name="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Alumni">Alumni</option>
                <option value="Moderator">Moderator</option>
                <option value="Applicant">Applicant</option>
            </select>
    </div>

    <label for="current">Current Projects</label>
    <input type="hidden" name="current" value="">
    <textarea name="current" cols="30" rows="5" class="border border-black"></textarea>
    <div class="flex flex-row justify-end">
        <button type="submit">Submit</button>
    </div>
    </form>
</div>