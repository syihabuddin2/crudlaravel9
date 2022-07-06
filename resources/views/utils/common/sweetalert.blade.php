@if (Session::has('success'))
    <script type="text/javascript">
        swal({
            title: "{{ Session::get('success') }}",
            timer: 1000,
            icon: 'success',
            button: false,
        });
    </script>
@endif

@if (Session::has('error'))
    <script type="text/javascript">
        swal({
            title: "{{ Session::get('error') }}",
            timer: 1000,
            icon: 'error',
            button: false,
        });
    </script>
@endif

@if (Session::has('warning'))
    <script type="text/javascript">
        swal({
            title: "{{ Session::get('warning') }}",
            timer: 1000,
            icon: 'warning',
            button: false,
        });
    </script>
@endif

@if (Session::has('info'))
    <script type="text/javascript">
        swal({
            title: "{{ Session::get('infp') }}",
            timer: 1000,
            icon: 'info',
            button: false,
        });
    </script>
@endif
