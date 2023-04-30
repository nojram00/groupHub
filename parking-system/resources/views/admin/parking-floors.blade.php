@include('.partials.__admin-header')
    <main>
        <div class="flex flex-col">

            <div class="flex flex-row justify-center content-center w-auto">
                <div class="flex flex-row">
                    <div class="p-5 justify-center text-center">
                        <h1 class="bg-white p-10 text-black font-bold rounded-xl">Parking ID</h1>

                        <div class="bg-blue-500 my-5 rounded-xl font-bold text-white py-2">
                            @foreach($data as $d)
                                <div class="flex flex-row p-3 text-center justify-center">
                                    <h1>{{$d->parking_id}}</h1>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-5 justify-center text-center">
                        <h1 class="bg-white p-10 text-black font-bold rounded-xl">Parking Time</h1>


                        <div class="bg-blue-500 my-5 rounded-xl font-bold text-white py-2">
                            @foreach($data as $d)
                                <div class="flex flex-row p-3 text-center justify-center">
                                    <h1>{{date('M d, Y, h:i:s A', strtotime($d->time_parking))}}</h1>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-5 justify-center text-center">
                        <h1 class="bg-white p-10 text-black font-bold rounded-xl">Time End</h1>

                        <div class="bg-blue-500 my-5 rounded-xl font-bold text-white py-2">
                            @foreach($data as $d)
                                <div class="flex flex-col p-3 text-center justify-center">
                                    @if ($d->time_end == null)
                                        <h1>None</h1>
                                    @else
                                        {{-- <h1>{{$d->time_end->format('d-m-Y h:i:sa')}}</h1> --}}
                                        <h1>{{date('M d, Y, h:i:s A', strtotime($d->time_end))}}</h1>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="p-5 justify-center text-center">
                        <h1 class="bg-white p-10 text-black font-bold rounded-xl">Plate Number</h1>

                        <div class="bg-blue-500 my-5 rounded-xl font-bold text-white py-2">
                            @foreach($data as $d)
                                <div class="flex flex-row p-3 text-center justify-center">
                                    @if ($d->plate_number == null)
                                        <h1>None</h1>
                                    @else
                                        <h1>{{$d->plate_number}}</h1>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-5 justify-center text-center">
                        <h1 class="bg-white p-10 text-black font-bold rounded-xl">Parked User</h1>

                        <div class="bg-blue-500 my-5 rounded-xl font-bold text-white py-2">
                            @foreach($data as $d)
                                <div class="flex flex-row p-3 text-center justify-center">
                                    @if ($d->parked_user == null)
                                        <h1>None</h1>
                                    @else
                                        <h1>{{$d->parked_user}}</h1>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-5 justify-center text-center">
                        <h1 class="bg-white p-10 text-black font-bold rounded-xl">Status</h1>


                        <div class="bg-blue-500 my-5 rounded-xl font-bold text-white py-2 px-3">
                            @foreach($data as $d)
                                <div class="flex flex-row p-3 text-center justify-center">
                                    @if ($d->isAvailable == 0)
                                        <div class="px-2 flex justify-center">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="#bfff00" xmlns="http://www.w3.org/2000/svg" class="self-center">
                                                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#323232" stroke-width="2"/>
                                                <path d="M9 12L10.6828 13.6828V13.6828C10.858 13.858 11.142 13.858 11.3172 13.6828V13.6828L15 10" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <h1>Available</h1>
                                    @else
                                        <div class="px-2 flex justify-center space-x-2 self-center">
                                            <a href="/updateFloor/{{$floor}}/{{$d->parking_id}}">
                                                <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M960 0v213.333c411.627 0 746.667 334.934 746.667 746.667S1371.627 1706.667 960 1706.667 213.333 1371.733 213.333 960c0-197.013 78.4-382.507 213.334-520.747v254.08H640V106.667H53.333V320h191.04C88.64 494.08 0 720.96 0 960c0 529.28 430.613 960 960 960s960-430.72 960-960S1489.387 0 960 0" fill-rule="evenodd"/>
                                                </svg>
                                            </a>

                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="#ff7f7f" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 8L8 16M8.00001 8L16 16M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <h1>Unavailable</h1>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
        </div>


    </main>



@include('.partials.__admin-footer')
