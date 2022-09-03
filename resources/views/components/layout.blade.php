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
            .admin-menu li a{
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
            <div class="sidebar bg-white min-h-screen w-[14rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg">
                <div class="flex h-screen flex-col justify-between pt-2 pb-6">
                    <div>
                        <div class="w-max p-2.5">
                            <img src="images/menu-logo.png" class="w-max h-max" alt="">
                        </div>
                        <ul class="mt-6 space-y-2 tracking-wide">
                            <li class="min-w-max">
                                <a href="/" aria-label="dashboard" class="relative flex items-center space-x-4 px-4 py-3 text-gray-600" >
                                    <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                                        <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                                        <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                                    </svg>
                                    <span class="-mr-1 font-medium">Dashboard</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="lecturer" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                    <svg class="-ml-1 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M18,16H6c-1.657,0-3-1.343-3-3V6c0-1.657,1.343-3,3-3h12c1.657,0,3,1.343,3,3v7C21,14.657,19.657,16,18,16z" opacity=".35" fill="#5B5B5B" />
                                        <circle cx="6.5" cy="4.5" r="2.5" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M13.929,8H5c-1.105,0-2,0.895-2,2l0,10.89c0,0.548,0.394,1.045,0.94,1.103c0.587,0.063,1.101-0.36,1.165-0.933l0.526-4.73C5.651,16.143,5.81,16,6,16h0c0.19,0,0.349,0.143,0.37,0.331l0.52,4.682c0.058,0.52,0.468,0.954,0.99,0.985C8.493,22.034,9,21.549,9,20.945v-9.636c0-0.259,0.191-0.479,0.447-0.516l4.584-0.655c0.518-0.074,0.942-0.492,0.967-1.014C15.028,8.508,14.538,8,13.929,8z" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M13.653,16l1.689,5.068C15.528,21.625,16.049,22,16.636,22h0c0.93,0,1.588-0.912,1.293-1.794L16.527,16H13.653z" fill="#5B5B5B" />
                                      </svg>
                                <span class="group-hover:text-gray-700">Lecturer</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="faculty" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                    <svg  class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M22,18.092V18c0-0.552-0.448-1-1-1h-1v-7h0.5c0.702,0,1.311-0.487,1.464-1.173s-0.189-1.385-0.825-1.685l-8.5-4c-0.405-0.19-0.873-0.19-1.277,0l-8.5,4c-0.636,0.3-0.979,1-0.826,1.685S2.798,10,3.5,10H4v7H3c-0.552,0-1,0.448-1,1v0.092c-0.581,0.207-1,0.756-1,1.408C1,20.328,1.672,21,2.5,21h19c0.828,0,1.5-0.672,1.5-1.5C23,18.848,22.581,18.298,22,18.092z" opacity=".35" fill="#5B5B5B" />
                                        <rect width="2" height="6.999" x="11" y="10" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M5,10v7H3V9.91C3.16,9.97,3.32,10,3.5,10H5z" fill="#5B5B5B" />
                                        <rect width="2" height="7" x="7" y="10" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M21,9.91V17h-2v-7h1.5C20.68,10,20.84,9.97,21,9.91z" fill="#5B5B5B" />
                                        <rect width="2" height="7" x="15" y="10" fill="#5B5B5B" />
                                        <circle cx="12" cy="7" r="1" fill="#5B5B5B" />
                                    </svg>
                                <span class="group-hover:text-gray-700">Faculty</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="department" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"  d="M19,4h-4.021C13.334,4,12,5.334,12,6.979l0,0v0C12,5.334,10.666,4,9.021,4H5C3.343,4,2,5.343,2,7v10c0,1.657,1.343,3,3,3h5.277c0.346,0.595,0.984,1,1.723,1s1.376-0.405,1.723-1H19c1.657,0,3-1.343,3-3V7C22,5.343,20.657,4,19,4z" opacity=".35" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"  d="M6,9H5C4.447,9,4,8.552,4,8s0.447-1,1-1h1c0.553,0,1,0.448,1,1S6.553,9,6,9z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="9" cy="8" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"  d="M6,13H5c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S6.553,13,6,13z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="9" cy="12" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M6,17H5c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S6.553,17,6,17z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="9" cy="16" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M16,9h-1c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S16.553,9,16,9z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="19" cy="8" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M16,13h-1c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S16.553,13,16,13z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="19" cy="12" r="1" fill="#5B5B5B" />
                                      </svg>
                                <span class="group-hover:text-gray-700">Department</span>
                                </a>
                            </li>
                            {{-- <li class="min-w-max">
                                <a href="department" class="bg group flex items-center space-x-4 px-4 py-3 text-white" style="background:#0184CC">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"  d="M19,4h-4.021C13.334,4,12,5.334,12,6.979l0,0v0C12,5.334,10.666,4,9.021,4H5C3.343,4,2,5.343,2,7v10c0,1.657,1.343,3,3,3h5.277c0.346,0.595,0.984,1,1.723,1s1.376-0.405,1.723-1H19c1.657,0,3-1.343,3-3V7C22,5.343,20.657,4,19,4z" opacity=".35" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"  d="M6,9H5C4.447,9,4,8.552,4,8s0.447-1,1-1h1c0.553,0,1,0.448,1,1S6.553,9,6,9z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="9" cy="8" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300"  d="M6,13H5c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S6.553,13,6,13z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="9" cy="12" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M6,17H5c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S6.553,17,6,17z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="9" cy="16" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M16,9h-1c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S16.553,9,16,9z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="19" cy="8" r="1" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M16,13h-1c-0.553,0-1-0.448-1-1s0.447-1,1-1h1c0.553,0,1,0.448,1,1S16.553,13,16,13z" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="19" cy="12" r="1" fill="#5B5B5B" />
                                      </svg>
                                <span class="group-hover:text-gray-700">Department</span>
                                </a>
                            </li> --}}
                            <li class="min-w-max">
                                <a href="module" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M7.5,21h-4C2.672,21,2,20.328,2,19.5v-15C2,3.672,2.672,3,3.5,3h4C8.328,3,9,3.672,9,4.5v15C9,20.328,8.328,21,7.5,21z" opacity=".35" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M20.5,21.75h-4c-0.828,0-1.5-1.422-1.5-2.25v-12C15,6.672,15.672,6,16.5,6h4C21.328,6,22,6.672,22,7.5v12C22,20.328,21.328,21.75,20.5,21.75z" opacity=".35" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="12" cy="18" r="1" opacity=".35" fill="#5B5B5B" />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="5.5" cy="17.5" r="1.5" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M13.5,8h-3C9.672,8,9,8.672,9,9.5v10c0,0.828,0.672,1.5,1.5,1.5h3c0.828,0,1.5-0.672,1.5-1.5v-10C15,8.672,14.328,8,13.5,8z M12,19c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C13,18.552,12.552,19,12,19z" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M7,7H4C3.447,7,3,6.552,3,6s0.447-1,1-1h3c0.553,0,1,0.448,1,1S7.553,7,7,7z" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M7,10H4c-0.553,0-1-0.448-1-1s0.447-1,1-1h3c0.553,0,1,0.448,1,1S7.553,10,7,10z" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M20,10h-3c-0.553,0-1-0.448-1-1s0.447-1,1-1h3c0.553,0,1,0.448,1,1S20.553,10,20,10z" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M20,13h-3c-0.553,0-1-0.448-1-1s0.447-1,1-1h3c0.553,0,1,0.448,1,1S20.553,13,20,13z" fill="#5B5B5B" />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M19,14c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S21.761,14,19,14z M21.619,18.619l-2.5,2.5c-0.165,0.165-0.385,0.256-0.619,0.256s-0.454-0.091-0.619-0.256l-1.5-1.5c-0.341-0.342-0.341-0.896,0-1.238c0.341-0.34,0.896-0.34,1.237,0l0.881,0.882l1.881-1.882c0.341-0.34,0.896-0.34,1.237,0C21.96,17.723,21.96,18.277,21.619,18.619z" fill="#5B5B5B" />
                                      </svg>
                                <span class="group-hover:text-gray-700">Module</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="#" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M18,21H6c-1.657,0-3-1.343-3-3V7h18v11C21,19.657,19.657,21,18,21z" opacity=".35"  />
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M18,3H6C4.343,3,3,4.343,3,6v1h18V6C21,4.343,19.657,3,18,3z"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="14" cy="18" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="10" cy="18" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="6" cy="18" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="6" cy="14" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="10" cy="14" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="14" cy="14" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="18" cy="14" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="18" cy="10" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="14" cy="10" r="1"  />
                                        <circle class="fill-current text-gray-600 group-hover:text-cyan-600" cx="10" cy="10" r="1"  />
                                    </svg>
                                <span class="group-hover:text-gray-700">Time Table</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="classes" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-6 w-6" viewBox="0 0 24 24">
                                    <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M18,21H6c-1.657,0-3-1.343-3-3V6c0-1.657,1.343-3,3-3h12c1.657,0,3,1.343,3,3v12C21,19.657,19.657,21,18,21z" opacity=".35"  />
                                    <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M20.5,21h-17C2.671,21,2,20.329,2,19.5S2.671,18,3.5,18h17c0.829,0,1.5,0.671,1.5,1.5S21.329,21,20.5,21z"  />
                                    <path class="fill-current text-gray-600 group-hover:text-cyan-600"d="M6,15c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l4-4c0.391-0.391,1.023-0.391,1.414,0L13,11.586l4.293-4.293c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414l-5,5c-0.391,0.391-1.023,0.391-1.414,0L10,11.414l-3.293,3.293C6.512,14.902,6.256,15,6,15z"  />
                                    <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M18,18h-2c-0.552,0-1-0.448-1-1s0.448-1,1-1h2c0.552,0,1,0.448,1,1S18.552,18,18,18z"  />
                                </svg>
                                <span class="group-hover:text-gray-700">Class</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="room" class="bg group flex items-center space-x-4 px-4 py-3 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M18,12V5l-6-2L6,5v7l-2,0.667V20c0,1.105,0.895,2,2,2h12c1.105,0,2-0.895,2-2v-7.333L18,12z" opacity=".35"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M13,22h-2v-4h2V22z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M17,16h-2v-2h2V16z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M11,8H9V6h2V8z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15,8h-2V6h2V8z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M9,20H7v-2h2V20z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M9,16H7v-2h2V16z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M13,16h-2v-2h2V16z"  />
                                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M17,20h-2v-2h2V20z"  />
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600"d="M18,6c-0.104,0-0.211-0.017-0.316-0.052L12,4.054L6.316,5.948C5.791,6.125,5.226,5.84,5.051,5.316C4.876,4.792,5.16,4.226,5.684,4.052l6-2c0.206-0.068,0.427-0.068,0.633,0l6,2c0.524,0.174,0.807,0.74,0.632,1.265C18.809,5.735,18.419,6,18,6z"  />
                                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M20,13.667c-0.104,0-0.211-0.017-0.316-0.052L12,11.054l-7.684,2.562c-0.527,0.176-1.09-0.108-1.265-0.632c-0.175-0.524,0.108-1.091,0.632-1.265l8-2.667c0.206-0.068,0.427-0.068,0.633,0l8,2.667c0.524,0.174,0.807,0.74,0.632,1.265C20.809,13.402,20.419,13.667,20,13.667z"  />
                                      </svg>
                                <span class="group-hover:text-gray-700">Room</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-max -mb-3">
                        <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-cyan-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                            <span class="group-hover:text-gray-700">Settings</span>
                        </a>
                    </div>
                </div>
            </div>
            <section class="page-content" style="width: 100%">
                <x-flash-message />
                <section class="search-and-user" style="display: flex; justify-content: space-between;  background: #ffffff00;">
                    <form class="search" style="margin-left: 1.5em; margin-top: 1em">
                        <div class="form-group mb-6" hidden>
                            <input type="text" style="background: #fdfdfd; border: none;" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border-gray-300 rounded transition ease-in-out m-2 focus:text-gray-700" name="name" placeholder="Search" >
                            @error('name')
                            <p class="text-red-5000 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </form>
                    <div class="admin-profile" style="display: flex; padding:5px;">
                        <a href="" >
                            <img src="images/logout.png" width="40px" height = "40px" class="avatar rounded-circle" style="padding: 10px"/>
                        </a>&nbsp;&nbsp;
                        <a href="">
                            <img src="images/profile.png" width="40px" height = "40px" class="avatar rounded-circle" style="padding: 5px; margin-right:20px;"/>
                        </a>
                    </div>
                </section>
                <section style="margin-left: 50px; margin-right: 50px; display:flex;">
                    @yield('content')
                </section>
            </section>
        </div>
    </body>
</html>