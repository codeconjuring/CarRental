<!DOCTYPE html>
<html lang="en">
<head>
  @include('Admin.include.head')
</head>
    <body class="hold-transition fixed sidebar-mini">
        <!-- Preloader -->
        {{-- <div class="preloader"></div> --}}
            {{-- add modal --}}
            @include('Admin.Modal.addcar')
        <!-- Site wrapper -->
        <div class="wrapper">
            {{-- include side nav --}}
                @include('Admin.include.sidenav')
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    {{-- Show Content --}}
                    <div id="showall">
                       @yield('index')
                       @yield('rentalcar')
                       @yield('singlerentdetails')
                       @yield('newdriverform')
                    </div>
                    
                </div>
            </div>
            <footer class="main-footer">
                {{-- include Footer --}}
                @include('Admin.include.footer')
            </footer>
        </div>
        {{-- include script --}}
        @include('Admin.include.script')

        {{-- pagination --}}

        <script type="text/javascript">

                $(function() {
                    $('body').on('click', '.pagination a', function(e) {
                        e.preventDefault();
                        var url = $(this).attr('href');
                        getArticles(url);
                        window.history.pushState("", "", url);
                    });

                    function getArticles(url) {
                        $.ajax({
                            url : url
                        }).done(function (data) {
                            // console.log(data);
                            $('#showall').html(data);
                        }).fail(function () {
                            alert('Articles could not be loaded.');
                        });
                    }
                });
            </script>

            @yield('custom-script');
    </body>
</html>