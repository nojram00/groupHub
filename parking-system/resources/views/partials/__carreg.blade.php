<div class="m-5 font-sans">
    <h1 class="font-bold text-blue-500 text-3xl text-center">Register Your Vehicle</h1>
</div>
<div class="flex justify-center items-center">
    <form action="/car-registered" class=" bg-blue-400 w-4/5 h-4/5 flex flex-col rounded-xl" method="POST">
        @csrf
        <label for="vehicle_model" class="p-3"><h3 class=" text-white text-lg">Car Model</h3></label>
        <input type="text" name="vehicle_model" class=" bg-slate-600 p-3 m-2 rounded-md text-white">
        <label for="plate_no" class="p-3"><h3 class=" text-white text-lg">Plate Number</h3></label>
        <input type="text" name="plate_no" class=" bg-slate-600 p-3 m-2 rounded-md text-white">
        <input type="submit" value="Register Vehicle" class="w-1/2 self-center bg-slate-600 p-5 m-2 text-white font-bold text-xl rounded-lg">
    </form>
</div>
