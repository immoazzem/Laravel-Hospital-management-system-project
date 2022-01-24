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
            @yield('department')

            @yield('patient')



            {{-- Section Entend here --}}
            {{-- Footer Content --}}
            @include('backend/layouts/footer-content')


        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    @include('backend/layouts/footer')


    {{-- Sweet Alert  --}}
    <script type="text/javascript">
 
        $('.show_confirm').click(function(event) {
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });
     
   </script>

</body>



</html>
