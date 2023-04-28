<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
    <body>
        <header>
            <div class="flex flex-col mt-5 text-center">
                <h1 class=" bg-blue-400 py-5 text-white font-bold text-2xl">SM Parking Admin Dashboard</h1>
                @include('.partials.__admin-navbar')
            </div>
        </header>
        <div class="min-h-screen py-5" style="background-image: linear-gradient(to bottom right, #1FA2FF, #12D8FA, #A6FFCB)">
