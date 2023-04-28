<nav class="bg-blue-700 rounded-md flex flex-col">

    <a href="/">
        <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-300 relative text-white hover:text-black hover:rounded-md hover:cursor-pointer">
            <h1 class="text-center">Dashboard</h1>
        </div>
    </a>

    <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-300 relative text-white hover:text-black hover:rounded-md hover:cursor-pointer" id="parking">
        <h1 class="text-center">Parking Lots</h1>
        <nav class="hidden" id="parking-floors">

            <a href="/floors/1">
                <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-500 relative text-black hover:text-white hover:rounded-md hover:cursor-pointer">
                    <h1 class="text-left">Floor 1</h1>
                </div>
            </a>

            <a href="/floors/2">
                <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-500 relative text-black hover:text-white hover:rounded-md hover:cursor-pointer">
                    <h1 class="text-left">Floor 2</h1>
                </div>
            </a>

            <a href="/floors/3">
                <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-500 relative text-black hover:text-white hover:rounded-md hover:cursor-pointer">
                    <h1 class="text-left">Floor 3</h1>
                </div>
            </a>

        </nav>
    </div>

    <a href="/notifications">
        <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-300 relative text-white hover:text-black hover:rounded-md hover:cursor-pointer">
            <h1 class="text-center">Notifications</h1>
        </div>
    </a>

    <a href="/settings">
        <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-300 relative text-white hover:text-black hover:rounded-md hover:cursor-pointer">
            <h1 class="text-center">Settings</h1>
        </div>
    </a>

    <div class="py-3 my-2 px-2 mx-2 hover:bg-blue-300 relative text-white hover:text-black hover:rounded-md hover:cursor-pointer">
        <form action="/logout" method="POST">
            @csrf
            {{-- <button type="submit" class="bg-transparent">logout</button> --}}
            <h1 class="text-center"><button class="bg-transparent w-full" type="submit">Logout</button></h1>
        </form>
    </div>
</nav>
