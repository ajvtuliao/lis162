<div class="flex flex-col space-y-4">
    <div class="flex flex-row justify-center">
        <h1 class="font-sans text-xl font-bold">Add Member Details</h1>
    </div>
    <div class="flex flex-row space-x-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/user.svg') }}" alt="">
        </div>
        <form action="/edit/{{ $member->id }}" method="post" class="flex flex-col space-y-2">
            @csrf
            @method('PUT')
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $member->name }}" class="border-b">
            <label for="date">Date of Membership</label>
            <input type="text" name="date" value="{{ $member->date }}" class="border-b">
            <label for="status">Membership Status</label>
            <select name="status">
                <option value="Active" {{ $member->membership=='Active' ? 'selected': '' }}>Active</option>
                <option value="Inactive" {{ $member->membership=='Inactive' ? 'selected': '' }}>Inactive</option>
                <option value="Alumni" {{ $member->membership=='Alumni' ? 'selected': '' }}>Alumni</option>
                <option value="Moderator" {{ $member->membership=='Moderator' ? 'selected': '' }}>Moderator</option>
                <option value="Applicant" {{ $member->membership=='Applicant' ? 'selected': '' }}>Applicant</option>
            </select>
    </div>

    <label for="current">Current Projects</label>
    <input type="hidden" name="current" value="">
    <textarea name="current" cols="30" rows="5" class="border border-black">{{ $member->current }}</textarea>
    <input type="submit" value="Submit">
    </form>
</div>
