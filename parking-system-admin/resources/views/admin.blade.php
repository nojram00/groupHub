<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin Login  </title>
</head>
<body>

    <div class="bg-blue-600 bg-cover py-20 bg-no-repeat min-w-full min-h-screen">

        <main>
            <div class="flex flex-col m-20">
                <section class="flex text-white font-bold text-4xl mx-4 self-center">
                    Admin Login
                </section>
                <section class="flex flex-col text-white  text-2xl mx-4 self-center py-5">

                    <h1 class="font-bold text-center">login to continue</h1>

                    <div class=" bg-slate-300 w-auto py-5 my-5 rounded-md">
                        <form action="loginadmin" method="post" class="p-3 flex flex-col space-y-5">
                            @csrf
                            <input type="text" name="admin_user" placeholder="Admin Username" class="p-2 rounded-md text-black">
                            @error('admin_user')
                                <p>{{$message}}</p>
                            @enderror
                            <input type="password" name="admin_password" placeholder="Admin Password" class="p-2 rounded-md text-black">
                            <button type="submit" class=" bg-blue-500 p-3 w-1/3 self-center rounded-md hover:bg-blue-700">Login</button>
                        </form>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
