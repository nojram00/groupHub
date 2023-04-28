<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Confirm Parking for Parking Slot {{$parkingID}}</title>
</head>
<body>

    <div class=" bg-blue-500 min-h-screen py-5">
        @include('confirmation-prompt')
        <header>
            <div class=" bg-white w-auto h-1/4 p-10">
                <h1 class=" text-center font-bold text-2xl">Confirm Parking for Slot {{$parkingID}}</h1>
            </div>
        </header>
        <main class="flex justify-center">
            <div class="my-5 py-5 w-1/2 h-auto font-bold text-xl text-white rounded-lg px-5 flex flex-col justify-center content-center text-center space-y-4" style="background-color:rgba(0, 0, 0, .5)">
                <h1>Parking No.: {{$parkingID}}</h1>
                <h1>Last time updated: <br> {{$parkingTime}}</h1>
                @if ($pStatus == 0)
                    <h1 class=" text-green-400 ">{{$status}}</h1>
                @else
                    <h1 class=" text-red-400 ">{{$status}}</h1>
                    <h1>Parked By: {{$parked_user}}</h1>
                    <h1>Plate Number: {{$plate_no}}</h1>
                @endif

                <div class="flex flex-col w-auto justify-center content-center">
                    @if($pStatus == 0)
                        @foreach($vehicle_list as $vehicle)
                            {{-- <a href="/parkHere/{{$parkingID}}/{{$vehicle->plate_no}}">
                                <h1 class="bg-slate-200 p-4 text-blue-800 rounded-md hover:bg-slate-900 hover:text-white w-auto m-2">Park Here as {{$vehicle->vehicle_model}}, {{$vehicle->plate_no}}</h1>
                            </a> --}}
                            <a href="/parking/confirm/{{$floor}}/{{$parkingID}}/{{$vehicle->vehicle_model}}">
                                <h1 class="bg-slate-200 p-4 text-blue-800 rounded-md hover:bg-slate-900 hover:text-white w-auto m-2">Park Here as {{$vehicle->vehicle_model}}, {{$vehicle->plate_no}}</h1>
                            </a>
                        @endforeach
                    @endif
                </div>

                <a href="/back/{{$floor}}">
                    <button class=" bg-slate-200 p-4 text-blue-800 rounded-md hover:bg-slate-900 hover:text-whit w-1/4">
                        Back
                    </button>
                </a>
            </div>
        </main>
    </div>
</body>
</html>
