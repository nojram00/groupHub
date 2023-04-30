@php
    auth()->user()->id
@endphp
@if(session()->has('message'))
<div class="bg-cover bg-blue-300" style="background-color: rgba(0, 0, 0, .5)" role="alert">
    <div class=" w-1/4 p-10 top-1/2 left-1/2 bg-blue-200 absolute rounded-lg border-black text-center" style="transform: translate(-50%, -50%)" role="alert">
        <h1 class="font-bold text-blue-500 outline-black text-2xl">Parked here as {{session('vehicle')}}-{{session('plateNum')}}</h1>
        <h1 class="font-bold text-blue-500 outline-black text-2xl">{{session('message')}}</h1>
        <div class="flex flex-col text-center text-xl my-3">
            {{-- <form action="/parkHere/{{session('floor')}}/{{session('parkingID')}}/{{session('plateNum')}}", method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="isAvailable" value="1">
                <input type="hidden" name="plate_number" value="{{session('plateNum')}}">
                <input type="hidden" name="parked_user" value="{{auth()->user()->name}}">
                <button type="submit">
                    Yes
                </button> --}}
            </form>
            <a href="/parkHere/{{session('floor')}}/{{session('parkingID')}}/{{session('plateNum')}}" class="w-full p-2 hover:bg-blue-800 hover:text-white rounded-md"><h1 class="font-bold">Yes</h1></a>
            <a href="" class="w-full p-2 hover:bg-blue-800 hover:text-white rounded-md"><h1 class="font-bold">No</h1></a>
        </div>
    </div>
</div>
@endif
