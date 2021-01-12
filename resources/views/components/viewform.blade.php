<div class="flex flex-col space-y-4">
    <h1 class="text-center text-2xl font-bold">{{ $member->name }}</h1>
    <div class="flex flex-row space-x-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/user.svg') }}" alt="">
        </div>
        <form class="flex flex-col space-y-2">
            @csrf
            <label for="date">Date of Membership</label>
            <input type="text" name="date" class="border-b" required value="{{ $member->date }}" disabled>
            <label for="status">Membership Status</label>
            <input type="text" name="status" class="border-b" value="{{ $member->membership }}" disabled>
        </form>
    </div>

    <label for="current">Current Projects</label>
    <textarea name="current" cols="30" rows="5" class="border border-black" disabled style="resize: none;">{{ $member->current }}</textarea>
    </form>
</div>