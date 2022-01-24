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
                  <!-- Breadcamp (Page header) -->
    <div class="container content-header " style="background-color: #dde6ed">
        <div class="row d-flex align-items-center ">
            <div class="col-md-2 mt-3 mr-auto font-weight-bold" style="border-right: 5px solid red;">
                <h2 class="page-title text-danger">{{ strtoupper(collect(request()->segments())->last())}}</h2>              
            </div>
            <div class="col-md-10">
                <div class="d-inline-block align-items-center">
                    <a href="/dashboard"><i class="fa fa-dashboard"></i></a> >
                    <?php $link = ''; ?>
                    @for ($i = 1; $i <= count(Request::segments()); $i++)
                        @if (($i < count(Request::segments())) & ($i> 0))
                            <?php $link .= '/' . Request::segment($i); ?>
                            <a href="<?= $link ?>">{{ ucwords(str_replace('-', ' ', Request::segment($i))) }}</a> >
                        @else {{ ucwords(str_replace('-', ' ', Request::segment($i))) }}
                    @endif
                    @endfor
                </div>
            </div>
        </div>
    </div><hr><hr>





            @yield('dashboard')
            @yield('user-profile')
            @yield('user-edit')
            @yield('edit-department')
            @yield('floor')
            @yield('edit-floor')
            @yield('bedcategory')
            @yield('edit-bedcategory')

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
