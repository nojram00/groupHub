@php
    $name = auth()->user()->name;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>

<body>
    <div class="min-h-screen py-5 bg-blue-500">

        <head>
            <div class="bg-white flex flex-col justify-center">
                <div class="flex flex-row content-center py-4 leading-7 space-x-5 px-20">
                    <div>
                        <img src="{{asset('images/logo2.png')}}" width="120px" height="120px" alt="sm-logo" class="self-center">
                    </div>
                    <div class="py-8">
                        <h1 class="text-5xl font-bold text-center text-blue-600" class="">SM PARKING SYSTEM</h1>
                    </div>
                    <div class="py-8 flex-grow align-middle leading-7 flex flex-col">
                        {{-- <img src="{{asset('images/usericon.png')}}" class="w-4 h-4" alt=""> --}}
                        <h1 class="text-2xl font-semibold text-black text-right" style="padding-top: 2rem">{{$name}}</h1>
                    </div>
                </div>
            </div>
        </head>
