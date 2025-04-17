<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('assets/fontawsome_css/all.css')}}">

    @vite('resources/css/admin.css')
</head>
<body>

    <div class="h-[100vh] overflow-hidden">
        <aside class="float-left w-[300px] bg-gray-950 h-full overflow-auto text-white">left sidebar</aside>
        <div class="float-left w-[calc(100%-300px)] h-full p-5">
            <header class="flex justify-end">
                <div class="flex items-end flex-col">
                    <div data-toggle-dropdown="dropdown" class="avatar w-10 h-10 border-2 border-gray-100 flex justify-center items-center rounded-full cursor-pointer">
                        <i class="fa-thin fa-user"></i>
                    </div>
                    <div id="dropdown">
                        <ul>
                            <li><a href=""><i class="fal fa-dashboard"></i> Dashboard</a></li>
                            <li><a href=""><i class="fal fa-user"></i> Profile</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <main class="h-full overflow-auto">

            </main>
        </div>

    </div>

    <script>
        let dropdownToggler = document.querySelectorAll("[data-toggle-dropdown]")
        dropdownToggler.forEach(el => {
            let dropdown = document.getElementById(el.getAttribute('data-toggle-dropdown'));
            dropdown.classList.add('hidden');
            el.addEventListener('click', function() {
                dropdown.classList.toggle('hidden');
            });

        })
    </script>
</body>
</html>
