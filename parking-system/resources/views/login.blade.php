<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class=" bg-slate-400">

   <!--
        For Login Page:
    -->

    {{-- Background --}}
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, rgb(57, 57, 199), rgba(207, 184, 184, 0.933))">
        
        {{-- Container --}}
        <div class="container mx-auto">
            
            <div class="w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden flex">

                {{-- Image --}}
                <div class="w-1/2 bg-slate-500">
                    <h1>Image Goes here</h1>
                </div>

                {{-- login --}}
                <div class="w-1/2 py-16 px-12">
                    
                    <h1 class="text-3xl font-bold text-center mb-4">Login</h1>
                    <form action="home" method="GET">
                        <div class="flex flex-col my-2">
                            <input type="text" placeholder="Username" class="border border-blue-900 py-1 px-2 rounded-xl my-1">
                            <input type="password" placeholder="Password" class="border border-blue-900 py-1 px-2 rounded-xl my-1">
                        </div>
                        <div class="flex flex-row justify-center">
                            <button class=" bg-slate-900 text-white px-7 py-3 rounded-2xl mx-1 my-1">Login</button>
                        </div>
                    </form>
                    <div class="flex flex-row justify-center">
                        <a href="register"><button class=" bg-slate-900 text-white px-5 py-3 rounded-2xl mx-1 my-1">Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>