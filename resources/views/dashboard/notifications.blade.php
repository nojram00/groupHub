@include('.partials.__header', ['title' => 'SM Parking Dashboard - Notifications'])

        <main>
            <div class="flex flex-row mt-5">

                {{-- Navigation --}}
                <div class="bg-slate-400 w-1/4 px-5 py-5 ml-5 flex flex-col" style="background-color: rgba(255, 255, 255, 0.5)">
                    @include('.partials.__navmenu')
                </div>


                {{-- Dashboard Panel --}}
                <div class=" bg-blue-300 w-9/12 h-auto float-right mr-5 py-5 px-5">
                    <h1 class="text-left font-bold font-sans text-3xl">Notifications</h1>
                    <div class="w-auto m-3 flex flex-col bg-white rounded-md">
                        @foreach($notifications as $notification)
                                <form action="delete/{{$notification->id}}" method="POST" class="flex flex-row">
                                    @csrf
                                    @method('delete')
                                    <h1 class="p-5 font-semibold flex-grow" style="flex-basis: 70%">{{$notification->notification}}</h1>
                                    <button type="submit" class="bg-blue-500 flex-grow m-2 rounded-md">Delete</button>
                                </form>
                        @endforeach
                    </div>
                </div>

            </div>
        </main>

@include('.partials.__footer')
