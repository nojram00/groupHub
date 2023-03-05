<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <!--
        Registration page/ Sign-up:
    -->
    
    <div class="min-h-screen py-5 bg-blue-500">
        <head>
            <div class="bg-white flex flex-col justify-center py-4">
                <div class="self-center py-1">
                    <h1 class="text-4xl font-bold text-blue-700">Welcome to SM Parking!</h1>
                </div>
                <div class="self-center py-1">
                    <h1 class="text-2xl font-bold text-blue-700">Hello! Let's get you started.</h1>
                </div>
            </div>
        </head>

        <main>
            <div class="py-5">
                <h1 class="text-3xl font-bold text-center text-white">Enter your details to Sign-up.</h1>
            </div>
            
            <div class="container mx-auto flex justify-center">
                <div class=" bg-blue-900 w-1/2 px-5 flex justify-center rounded-xl">
                    <form action="" method="">
                        {{-- @csrf --}}
                    {{-- Name --}}
                        <div class="flex flex-row py-4 self-center">
                            <h1 class=" text-xl text-white font-semibold px-3">Name: </h1>
                            <input type="text" placeholder="Name" class=" px-1 py-1 rounded-md border border-black w-3/4">
                        </div>
                    {{-- Address --}}
                        <div class="flex flex-row py-3 self-center">
                            <h1 class=" text-xl text-white font-semibold px-3">Address: </h1>
                            <input type="text" placeholder="Address" class=" px-1 py-1 rounded-md border border-black w-3/4">
                        </div>
                    {{-- Age --}}
                        <div class="flex flex-row py-3 self-center space-x-1">
                            <h1 class=" text-xl text-white font-semibold px-3">Age: </h1>
                            <input type="text" placeholder="Age" class=" px-1 py-1 rounded-md border border-black w-20">
                            <div class="flex content-between justify-center space-x-2">
                                <input type="radio" name="Gender" id=""> <h1 class="text-white font-medium self-center">Male</h1>
                                <input type="radio" name="Gender" id=""> <h1 class="text-white font-medium self-center">Female</h1>
                            </div>
                        </div>
                    {{-- Birthday --}}
                        <div class="flex flex-row py-3 self-center">
                            <h1 class=" text-xl text-white font-semibold px-3">Birthday: </h1>
                            <input type="date" class=" px-1 py-1 rounded-md border border-black w-3/4">
                        </div>
                    {{-- Email address --}}
                        <div class="flex flex-row py-3 self-center">
                            <h1 class=" text-xl text-white font-semibold px-3">Email: </h1>
                            <input type="text" placeholder="Email" class=" px-1 py-1 rounded-md border border-black w-3/4">
                        </div>
                    {{-- Password --}}
                        <div class="flex flex-row py-3 self-center">
                            <h1 class=" text-xl text-white font-semibold px-3">Password: </h1>
                            <input type="password" placeholder="Password" class=" px-1 py-1 rounded-md border border-black w-3/4">
                        </div>
                    {{-- Continue Button --}}
                        <div class="flex flex-row py-3 content-center justify-center">
                            <button class="bg-blue-500 text-white px-7 py-3 rounded-2xl mx-1 my-1 hover:bg-black hover:text-white shadow-black shadow-md">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
           
            <div class="py-5 flex flex-row mx-auto justify-center space-x-1">
                <p class=" italic text-white font-medium">Already have an account? </p> <a href="/" class="text-black font-medium hover:text-white underline"><p>Login</p></a>
            </div>
        </main>
        
    </div>
</body>
</html>