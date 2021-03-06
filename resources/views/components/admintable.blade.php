<div class="flex flex-row">
    <table class="table-auto border-2 border-collapse ml-16 mr-12 -mt-5">
        <thead class="bg-indigo-100 text-gray-700">
            <tr>
                <th class="w-4/12 border-2 border-gray-300 font-bold tracking-wide">Name</th>
                <th class="w-4/12 border-2 border-gray-300 font-bold tracking-wide">Membership Status</th>
                <th class="w-2/12 border-2 border-gray-300 font-bold tracking-wide">Edit Details</th>
                <th class="w-2/12 border-2 border-gray-300 font-bold tracking-wide">Remove</th>
            </tr>
        </thead>
        <tbody class="bg-blue-50">
            @foreach($members as $member)
            <tr>
                <td class="text-center hover:underline border-b subpixel-antialiased font-medium text-gray-700"><a href="#view-{{ $member->id }}" rel="modal:open">{{ $member->name }}</a></td>
                <td class="text-justify border-b subpixel-antialiased text-gray-700 ">
                    <div class="ml-36 -mt-1">
                        {{ $member->membership }}
                    </div>
                    <div>
                        <img src="{{ asset('img/'.strtolower($member->membership).'.svg') }}" alt="status" class="w-3 -mt-4 ml-32">
                    </div>
                </td>
                <td class="border-b subpixel-antialiased"><a href="#edit-{{ $member->id }}" rel="modal:open" class="flex justify-center"><img src="{{ asset('img/edit.svg') }}" class="w-3/12 md:w-1/12"></a></td>
                <td class="border-b "><a href="/delete/{{ $member->id }}" class="flex justify-center"><img src="{{ asset('img/delete.svg') }}" class="w-3/12 md:w-1/12"></a></td>
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
<div id="addskill" class="modal">
    <x-addskill></x-addskill>
</div>