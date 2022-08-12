<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard|Examination Time Table</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                extend: {
                    colors: {
                    laravel: '#ef3b2d',
                    },
                },
                },
            }
        </script>
        <style>
            body {
                font: 16px/1.5 "Lato", sans-serif;
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
                width: 40px;
                height: 40px;
                margin: 5px;
            }
        </style>
    </head>
    <body class="antialiased" style="background: #F3F3F3;">
        <header class="page-header" class="" style="width: 220px; position: fixed; background: #FFFFFF; height :100%; ">
            <nav style="padding: 8px 8px;">
                <a href="#0" aria-label="forecastr logo" class="logo">
                    <img src="images/logo.png" alt="MUBAS" width="80" height="80"/>
                </a>
                <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu" style="display: none">
                    <img src="assets/images/menu.png"/>
                </button>
                <ul class="admin-menu" style="margin-top:20px;">
                    <li class="menu-heading" style="padding: 0px;">
                        <h3>ADMINISTRATOR</h3>
                    </li>
                    <li>
                        <a href="profile.php" style="">
                            <img src="images/dashboard-active.png"/>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="cordinator.php">
                            <img src="images/icons8-training-100 (1).png" width="30px" />
                            <span>Lecturer</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/icons8-faculty-100.png" width="30px" />
                            <span>Faculty</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/icons8-department-100.png" width="30px" />
                            <span>Department</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/module.png" width="30px" />
                            <span>Module</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/icons8-class-100.png" width="30px" />
                            <span>Class</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/icons8-room-100.png" width="30px" />
                            <span>Room</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/icons8-timetable-100.png" width="30px" />
                            <span>Time Table</span>
                        </a>
                    </li>
                    {{-- <li class="menu-heading">
                        <h3>HELP</h3>
                    </li>
                    <li>
                        <a href="">
                            <img src=""/>
                            <span>Help Manual</span>
                        </a>
                    </li>
                    <li>
                        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                            <span>Collapse</span>
                        </button>
                    </li> --}}
                </ul>
            </nav>
        </header>
        <section class="page-content" style="margin-left: 220px;">
            <section class="search-and-user" style="display: flex; justify-content: space-between;  background: #FFFFFF;">
                <form class="search">
                    
                </form>
                <div class="admin-profile" style="display: flex; padding:5px;">
                    <a href="">
                        <img src="images/logout.png" width="40px" height = "40px" class="avatar rounded-circle"/>
                    </a>&nbsp;&nbsp;
                    <a href="">
                        <img src="images/profile.png" width="40px" height = "40px" class="avatar rounded-circle"/>
                    </a>
                </div>
            </section>
            @yield('content')
        </section>
    </body>
</html>