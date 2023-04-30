<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
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
                    <form action="registered" method="post" class="flex flex-col py-3 space-y-4">
                      @csrf

                      <div class="flex flex-row space-x-2 leading-4">
                        <label for="name"><h1 class=" text-xl text-white font-semibold py-3 text-left">Name: </h1></label>
                        <input type="text" placeholder="Name" name="name" class=" px-1 py-1 rounded-md border border-black w-3/4 h-3/4" id="name" value={{old('name')}}>
                      </div>

                        @error('name')
                            <p class=" text-red-600 text-xs  mt-2">
                                {{$message}}
                            </p>
                        @enderror

                      <div class="flex flex-row space-x-2 leading-4">
                        <label for="email"><h1 class=" text-xl text-white font-semibold py-3 text-left">Email: </h1></label>
                        <input type="text" placeholder="Email Address" name="email" class=" px-1 py-1 rounded-md border border-black w-3/4 h-3/4" id="email" value={{old('email')}}>
                      </div>

                        @error('email')
                            <p class=" text-red-600 text-xs  mt-2">
                                {{$message}}
                            </p>
                        @enderror

                      <div class="flex flex-row space-x-2 leading-4">
                        <label for="password"><h1 class=" text-xl text-white font-semibold py-3 text-left">Password: </h1></label>
                        <input type="password" placeholder="Password" name="password" class=" px-1 py-1 rounded-md border border-black w-3/4 h-3/4" id="password">
                      </div>

                        @error('password')
                            <p class=" text-red-600 text-xs  mt-2">
                                {{$message}}
                            </p>
                        @enderror

                      <div class="flex flex-row space-x-2">
                        <label for="password_confirmation"><h1 class=" text-xl text-white font-semibold py-3 text-left"> Confirm: </h1></label>
                        <input type="password" placeholder="Password" name="password_confirmation" class=" px-1 py-1 rounded-md border border-black w-3/4 h-3/4" id="password_confirmation">
                      </div>

                        @error('password_confirmation')
                            <p class=" text-red-600 text-xs  mt-2">
                                {{$message}}
                            </p>
                        @enderror

                      <button type="submit" class="bg-blue-500 text-white px-7 py-3 rounded-2xl mx-1 my-1 hover:bg-black hover:text-white shadow-black shadow-md">Continue</button>

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

{{--

    username: petmalumarjon.01@gmail.com
    password: 12345

    username: petmalu.marjon@gmail.com
    password: 9876

--}}
