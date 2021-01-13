<div class="flex flex-row w-screen justify-center items-center border-b border-black bg-indigo-900 py-2">
    <a href="/" class="w-5 md:w-1/12"><img src="{{ asset('img/intechlogo.svg') }}" alt="Logo"></a>
    <h2 class="font-sans font-bold text-xl md:text-6xl tracking-wide text-center text-white ml-8">UP INTECH</h2>
    <h2 class="font-sans font-extralight text-xl md:text-4xl w-6/12 tracking-wide text-center text-white -ml-12 mt-1">Membership Monitoring System</h2>
    @if (Auth::user())
    <div class="flex flex-row justify-end">
        <a href="/logout" class="bg-blue-700 hover:bg-blue-800 border border-blue-800 md:text-lg text-center rounded-sm font-semibold text-blue-50 w-20 h-8 -mt-10 -mr-5"><img src="">Logout</a>
    </div>
    @endif
</div>