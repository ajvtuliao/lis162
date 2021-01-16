<div class="flex flex-row w-11/12">
  <form action="/search" method="post" class="flex flex-row w-full space-x-4">
    @csrf
    <div class="flex flex-wrap w-full relative h-8 items-center bg-indigo-50 border-indigo-300 rounded mb-6 pr-10 ">
      <div class="flex -mr-px justify-center w-15 p-4">
        <span class="flex items-center leading-normal -mt-2 pl-2 border-0 rounded bg-indigo-50 rounded-r-none text-2xl text-gray-600 border-indigo-300">
          <x-heroicon-o-search class="w-5" />
        </span>
      </div>
      <input input type="search" name="search" placeholder="Search Name" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 bg-indigo-50 rounded rounded-l-none px-1 -mt-3 self-center relative  font-light outline-none" />
    </div>
    <input type="submit" class="bg-blue-700 hover:bg-blue-900 border border-indigo-200 text-blue-50 font-semibold rounded h-8 w-40" value="Search">
    <div class="flex flex-row justify-center">
      @if (Auth::user()->is_admin==1)
      <a href="#create" rel="modal:open" class=" text-green-50 bg-green-700 hover:bg-green-900 font-semibold border border-green-600 text-center rounded h-8 w-28 pt-1 ml-3">Add Member</a>
      <a href="#addskill" rel="modal:open" class="border-indigo-700 hover:bg-indigo-900 bg-indigo-700 text-blue-50 font-semibold w-28 h-8 rounded ml-2">Add Skills</a>
      @endif
    </div>
  </form>
</div>