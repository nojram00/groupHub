<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>

   <!--
        For Login Page:
    -->

    {{-- Background --}}
    <div class="min-h-screen py-40 bg-no-repeat min-w-full bg-cover" style="background-image: url('images/bg.png')">

        {{-- Container --}}
        <div class="container mx-auto">

            <div class=" flex justify-center">
                <img src="{{ asset('images/logo2.png') }}" alt="logo" class=" w-60 h-60 mx-20 my-5">
            </div>

            <div class=" w-1/3 rounded-xl mx-auto shadow-lg overflow-hidden flex justify-center" style="background-color: rgba(53, 127, 248, 0.5)">
                {{-- login --}}
                <div class="w-1/2 py-3 px-4">
                    <form action="signedin" method="post">
                        @csrf
                        <div class="flex flex-col my-2">
                            <input type="text" placeholder="Username/Email" name="email" class="border border-blue-900 py-1 px-2 rounded-xl my-1">
                                @error('email')
                                    <p class=" text-red-600 text-xs  mt-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            <input type="password" placeholder="Password" name="password" class="border border-blue-900 py-1 px-2 rounded-xl my-1">
                                @error('password')
                                    <p class=" text-red-600 text-xs  mt-2">
                                        {{$message}}
                                    </p>
                                @enderror
                        </div>


                        <div class="flex flex-row justify-center">
                            <a href="" class="text-white hover:text-black underline"><h1 class="text-lg font-medium mb-4">Forgot Password?</h1></a>
                        </div>
                        <div class="flex flex-row justify-center">
                            {{-- Login Button --}}
                            <button class="bg-blue-500 text-white px-7 py-3 rounded-2xl mx-1 my-1 hover:bg-black hover:text-white shadow-black shadow-md">Login</button>
                        </div>
                    </form>

                </div>
            </div>

            {{-- Go to register --}}
            <div class="w-1/3 rounded-xl mx-auto shadow-lg overflow-hidden flex justify-center my-10 py-5" style="background-color: rgba(53, 127, 248, 0.5)">
                <div class="flex flex-col justify-center content-center">
                    <div>
                        <h1 class=" text-lg font-medium mb-4 text-white">Don't have an account?</h1>
                    </div>
                    <div class="self-center">
                        {{-- Register Button --}}
                        <a href="register"><button class="bg-blue-500 text-white px-7 py-3 rounded-2xl mx-1 my-1 hover:bg-black hover:text-white shadow-black shadow-md">Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

{{--

    Dummy Accounts (Baka makalimutan ko):

    email: petmalumarjon.01@gmail.com
    password: 12345

--}}
