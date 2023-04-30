@include('.partials.__header', ['title' => 'SM Parking Dashboard - Home'])

        <main>
            <div class="flex flex-row mt-5">

                {{-- Navigation --}}
                <div class="bg-slate-400 w-1/4 px-5 py-5 ml-5 flex flex-col" style="background-color: rgba(255, 255, 255, 0.5)">
                    @include('.partials.__navmenu')
                </div>


                {{-- Dashboard Panel --}}
                <div class=" bg-blue-300 w-9/12 h-auto float-right mr-5 py-5 px-5">
                    <h1 class="text-left font-bold font-sans text-3xl">Announcements</h1>
                    <div class=" px-3 py-2 w-auto m-3">
                        <img src="{{asset('images/ad.png')}}" alt="">
                    </div>
                </div>
            </div>
        </main>

@include('.partials.__footer')
