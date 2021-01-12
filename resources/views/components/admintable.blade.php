<div class="flex flex-row">
    <table class="table-fixed w-screen border border-black border-collapse">
        <thead>
            <tr>
                <th class="w-4/12 border border-black">Name</th>
                <th class="w-4/12 border border-black">Membership Status</th>
                <th class="w-2/12 border border-black">Edit Details</th>
                <th class="w-2/12 border border-black">Remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td class="text-center hover:underline"><a href="#view-{{ $member->id }}" rel="modal:open">{{ $member->name }}</a></td>
                <td class="text-center">{{ $member->membership }}</td>
                <td><a href="#edit-{{ $member->id }}" rel="modal:open" class="flex justify-center"><img src="{{ asset('img/edit.svg') }}" class="w-3/12 md:w-1/12"></a></td>
                <td><a href="/delete/{{ $member->id }}" class="flex justify-center"><img src="{{ asset('img/delete.svg') }}" class="w-3/12 md:w-1/12"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@foreach ($members as $member)
<div id="edit-{{ $member->id }}" class="modal">
    <x-editform :member="$member"></x-editform>
</div>
<div id="view-{{ $member->id }}" class="modal">
    <x-viewform :member="$member"></x-viewform>
</div>
@endforeach
<div id="create" class="modal">
    <x-createform></x-createform>
</div>