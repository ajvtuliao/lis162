<div class="flex flex-col space-y-4">
    <h1 class="text-center text-2xl font-bold text-gray-800">{{ $member->name }}</h1>
    <div class="flex flex-row space-x-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/user.svg') }}" alt="">
        </div>
        <form class="flex flex-col space-y-2">
            @csrf
            <label for="date" class="text-gray-900 font-semibold">Date of Membership</label>
            <input type="text" name="date" class="border-b px-2 py-1" required value="{{ $member->date }}" disabled>
            <label for="status" class="text-gray-900 font-semibold">Membership Status</label>
            <input type="text" name="status" class="border-b px-2 py-1" value="{{ $member->membership }}" disabled>
        </form>
    </div>

    <label for="current" class="text-gray-900 font-semibold">Current Projects</label>
    <textarea name="current" cols="30" rows="5" class="px-2 py-1" disabled style="resize: none;">{{ $member->current }}</textarea>
    </form>
</div>