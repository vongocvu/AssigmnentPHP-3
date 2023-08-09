<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/LoL_icon.svg/2048px-LoL_icon.svg.png"
        type="image/x-icon">
    @stack('HeadAdmin')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/super-build/ckeditor.js"></script>
    <script src="{{ asset('js/function.js')}}"></script>
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
    @vite('resources/css/root.css')
    @vite('resources/css/admin.css')
    @vite('resources/scss/loading.scss')
</head>

<body>
    <div class="w-full h-[100vh] flex relative">
        <div
            class="absolute inset-0 w-full h-full bg-[url(https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltc28d43095579c8b5/5d87c24e8d8a3163705e3070/summonersrift.jpg)] bg-no-repeat bg-cover">
        </div>
        <div class="absolute inset-0 w-full h-full z-[1] bg-black opacity-[.5]"></div>
        <div class="w-[300px] h-full relative z-[10]">
            @include('components.admin.common.Sidebar')
        </div>
        <div class="flex-1 h-[100vh] relative z-[10] flex flex-col">
            <div class="">
                @include('components.admin.common.Header')
            </div>
            <div class="flex-1 w-full relative z-[10] overflow-y-scroll custom-scroll">
                @yield('main')
            </div>
        </div>
    </div>
    @include('components.loading.loading')
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('js/ckeditor.js')}}"></script>

    @livewireScripts
</body>

</html>