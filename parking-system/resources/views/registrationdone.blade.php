<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Done</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen py-5 bg-blue-500">
        {{-- <head>
            <div class="bg-white flex flex-col justify-center py-4">
                <div class="self-center py-1">
                    <h1 class="text-4xl font-bold text-blue-700">Hello {{$name}}</h1>
                </div>
                <div class="self-center py-1">
                    <h1 class="text-2xl font-bold text-blue-700">Let's Verify your Email Address</h1>
                </div>
            </div>
        </head> --}}

        <main>
            <div class="py-5">
                <h1 class="text-3xl font-bold text-center text-white">Registration Complete</h1>
            </div>

            <div class="container mx-auto flex justify-center flex-col font-semibold content-center">
                <div class=" bg-white self-center w-1/2 h-auto p-10 rounded-xl">
                    <p class=" text-center">Click Continue to login your account</p>
                </div>
                <form action="logout" method="post" class=" w-1/2 justify-center my-10 self-center">
                    @csrf
                    <button class="bg-white p-4 text-blue-800 rounded-md hover:bg-slate-900 hover:text-white w-1/4">
                        Continue to Login Page
                    </button>
                </form>


            </div>

        </main>
    </div>
</body>
</html>
