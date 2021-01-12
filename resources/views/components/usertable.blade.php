<div class="flex flex-row">
    <table class="table-fixed w-screen border border-black border-collapse">
        <thead>
            <tr>
                <th class="w-5/12 border border-black">Name</th>
                <th class="w-4/12 border border-black">Membership Status</th>
                <th class="w-3/12 border border-black">Current Projects</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td class="text-center hover:underline"><a href="#view-{{ $member->id }}" rel="modal:open">{{ $member->name }}</a></td>
                <td class="text-center">{{ $member->membership }}</td>
                <td class="text-center">{{ $member->current }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@foreach ($members as $member)
<div id="view-{{ $member->id }}" class="modal">
    <x-viewform :member="$member"></x-viewform>
</div>
@endforeach

