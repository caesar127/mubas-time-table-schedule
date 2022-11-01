<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard|Examination Time Table</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        @vite(['resources/js/app.js','resources/js/dycalendar.min.js','resources/js/dycalendar.js'])
        @vite('resources/css/app.css')
        <style>
            body {
                font: 16px/1.5 ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            .admin-menu li{
                width: 100%;
                padding: 5px 15px;
            }
            .admin-menu li a{/
                display: flex; 
                align-items: center; 
                font-size: 0.9rem;
            }
            .admin-menu li a img{
                width: 35px;
                height: 35px;
                margin: 5px;
            }
        </style>
    </head>
    <body class="antialiased" style="background: #F3F3F3;">
        <div class="min-h-screen" style="display: flex; background: #F3F3F3;">
            <section class="page-content" style="width: 100%">
                <x-flash-message />
                <div style="margin-left: 35%; margin-right: 35%; margin-top:13%; background: #ffffff; border-radius:15px;">
                    <div class="relative p-6">
                        <div style="display: flex; justify-content:space-between; padding-bottom:20px;">
                            <img src="images/logo.png" alt="" width="50px">
                            <h1 style="font-weight: 700; font-size: 30px; color: #545454;">SIGN IN</h1>
                        </div>
                        <form class="" action="/user/auth" method="POST">
                            @csrf
                            <div class="form-group mb-6">
                                <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" placeholder="Email">
                              @error('module_code')
                              <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
                              @enderror
                            </div>
                            <div class="form-group mb-6">
                                <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password" placeholder="Password">
                                @error('module_name')
                                <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class=" w-full px-6 py-3.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #0184CC">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>