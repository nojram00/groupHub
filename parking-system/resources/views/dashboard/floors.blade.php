@include('.partials.__header', ['title' => session('title')])
<main>
    <div class="flex flex-row mt-5">

        {{-- Navigation --}}
        <div class="bg-slate-400 w-1/4 px-5 py-5 ml-5 flex flex-col rounded-lg  " style="background-color: rgba(255, 255, 255, 0.5)">
            @include('.partials.__navmenu')
        </div>


        {{-- Dashboard Panel --}}
        <div class=" bg-blue-300 w-1/2 h-auto float-right mx-5 py-5 px-5 rounded-lg ">
            <h1 class="text-left font-bold font-sans text-3xl">{{$header}}</h1>

            <div class=" py-3 px-3 flex flex-col space-y-6">
                <div id="column-1" class=" flex flex-row space-x-6">
                    @foreach ($floorLevel_A as $fd)
                        <a href="/parking/{{$floor}}/{{$fd->parking_id}}">
                            <div class=" w-32 bg-slate-300 h-40 flex flex-col content-center justify-center hover:bg-slate-800 hover:text-white rounded-md" id="parking-slot">
                                <h1 class=" text-center font-semibold text-black" id="parking-info"> {{$fd->parking_id}} </h1>
                                <h1 class=" text-center font-semibold text-black" id="parking-info">Time-in: <br> {{$fd->time_parking}} </h1>
                                @if ($fd->isAvailable == 0)
                                    <h1 class=" text-center font-semibold text-green-500"> Available </h1>
                                @else
                                    <h1 class=" text-center font-semibold text-red-500"> Unavailable </h1>
                                @endif
                             </div>
                        </a>
                    @endforeach
                </div>
                <div id="column-2" class=" flex flex-row space-x-6">
                    @foreach ($floorLevel_B as $fd)
                    <a href="/parking/{{$floor}}/{{$fd->parking_id}}">
                        <div class=" w-32 bg-slate-300 h-40 flex flex-col content-center justify-center hover:bg-slate-800 hover:text-white rounded-md" id="parking-slot">
                            <h1 class=" text-center font-semibold text-black" id="parking-info"> {{$fd->parking_id}} </h1>
                            <h1 class=" text-center font-semibold text-black" id="parking-info">Time-in: <br> {{$fd->time_parking}} </h1>
                            @if ($fd->isAvailable == 0)
                                <h1 class=" text-center font-semibold text-green-500"> Available </h1>
                            @else
                                <h1 class=" text-center font-semibold text-red-500"> Unavailable </h1>
                            @endif
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>

        <aside class="w-1/2 mx-5 h-auto bg-white rounded-xl">
            @include('.partials.__carreg')
        </aside>
    </div>
</main>


@include('.partials.__footer')
