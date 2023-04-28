<nav>
    <div class="text-center font-bold text-2xl max-h-max h-max">
        <div class=" flex flex-row w-auto bg-white p-5 mx-4 float-left justify-center content-center rounded-2xl">
            <div class="flex flex-row">
                <a href="/admin-dashboard"><h1 class="text-blue-500 rounded-lg bg-white w-max p-5 hover:bg-blue-300 hover:text-black">Main Dashboard</h1></a>
            </div>

            <div class="flex flex-col" id="hover">
                <a href="#"><h1 class="text-blue-500 bg-white rounded-lg w-max p-5 hover:bg-blue-300 hover:text-black" >Floors</h1></a>
                <div class="invisible hidden">
                    <nav class="flex flex-col">
                        <div>
                            <a href="/admin/parkingfloors/1"><h1 class="text-blue-500 bg-white rounded-lg w-max p-5 hover:bg-blue-300 hover:text-black">Floor 1</h1></a>
                        </div>
                        <div>
                            <a href="/admin/parkingfloors/2"><h1 class="text-blue-500 bg-white rounded-lg w-max p-5 hover:bg-blue-300 hover:text-black" >Floor 2</h1></a>
                        </div>
                        <div>
                            <a href="/admin/parkingfloors/3"><h1 class="text-blue-500 bg-white rounded-lg w-max p-5 hover:bg-blue-300 hover:text-black" >Floor 3</h1></a>
                        </div>
                    </nav>
                </div>
            </div>

            <div>
                <form action="/logout" method="POST" class="flex flex-row">
                    @csrf
                    <button type="submit" class="text-blue-500 bg-white rounded-lg w-max p-5 hover:bg-blue-300 hover:text-black">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>


