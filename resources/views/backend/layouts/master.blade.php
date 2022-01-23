<!DOCTYPE html>
<html lang="en">



<head>
    @include('backend/layouts/head')
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper">

            {{-- Header --}}
            @include('backend/layouts/header')
            {{-- Header --}}

            {{-- Sidebar --}}
            @include('backend/layouts/sidebar')
            {{-- Sidebar --}}

            {{-- Section Entend here --}}






            @yield('dashboard')
            @yield('user-profile')
            @yield('user-edit')

            @yield('patient')
            @yield('department')



            {{-- Section Entend here --}}
            {{-- Footer Content --}}
            @include('backend/layouts/footer-content')


        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    @include('backend/layouts/footer')

</body>



</html>
