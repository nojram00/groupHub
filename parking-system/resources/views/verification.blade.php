<?php
    $name = auth()->user()->name;
    $emailAdd = auth()->user()->email;

    // $name = 'marjon';
    // $emailAdd = 'kupalka@gmail.com';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Your Account</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen py-5 bg-blue-500">
        <head>
            <div class="bg-white flex flex-col justify-center py-4">
                <div class="self-center py-1">
                    <h1 class="text-4xl font-bold text-blue-700">Hello {{$name}}</h1>
                </div>
                <div class="self-center py-1">
                    <h1 class="text-2xl font-bold text-blue-700">Let's Verify your Email Address</h1>
                </div>
            </div>
        </head>

        <main>
            <div class="py-5">
                <h1 class="text-3xl font-bold text-center text-white">We sent a verification to your email: </h1> <h1 class="text-3xl font-medium italic text-center text-blue-900">{{$emailAdd}}</h1>
            </div>

            <div class="container mx-auto flex justify-center">
                <div class=" bg-blue-900 w-1/2 px-5 flex justify-center rounded-xl flex-col">
                    {{-- <form action="registered" method="post" class="flex flex-col py-3 space-y-4 content-center justify-center">
                      @csrf

                      <div class="flex flex-row space-x-2 leading-4 self-center">
                        <input type="text" placeholder="Enter Code" name="otp" class=" px-7 py-3 rounded-md border border-black w-auto h-auto">
                      </div>

                      <button type="submit" class="bg-blue-500 text-white px-7 py-3 rounded-2xl mx-1 my-1 w-3/4 self-center hover:bg-black hover:text-white shadow-black shadow-md">Continue</button>
                    </form>

                    <form action="register" method="GET" class="flex flex-col py-3 space-y-4 content-center justify-center">
                        <button type="submit" class="bg-blue-500 text-white px-7 py-3 rounded-2xl mx-1 my-1 w-3/4 self-center hover:bg-black hover:text-white shadow-black shadow-md">Back to Register</button>
                    </form> --}}

                    <h1 class=" text-white font-bold self-center py-5 space-y-4">
                        Once verified, you will able <br>
                        to enter the dashboard.
                    </h1>
                </div>
            </div>

            <div class="py-5">

                <form action="/logout" method="post">
                    @csrf
                    <h1 class="text-xl font-normal text-center text-white">Not {{$name}}? <button type="submit">logout</button></h1>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
