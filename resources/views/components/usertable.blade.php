<div class="flex flex-row">
    <table class="table-auto  ml-16 mr-14 border-2 border-gray-300 border-collapse">
        <thead class="bg-indigo-100 text-gray-700">
            <tr>
                <th class="w-96 border-2 border-gray-300 font-bold tracking-wide">Name</th>
                <th class="w-96 border-2 border-gray-300 font-bold tracking-wide">Membership Status</th>
                <th class="w-96 border-2 border-gray-300 font-bold tracking-wide">Current Projects</th>
            </tr>
        </thead>
        <tbody>
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
                <td class="text-center hover:underline border-b subpixel-antialiased font-medium text-gray-700">{{ $member->current }}</td>
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

