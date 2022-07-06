@section('navbar')
    <nav class="navbar sticky-top bg-light shadow">
        <div class="text-center col-sm-4 col-md-11">
            <img src="/assets/oppologo.png" alt="logo oppo" width="130">
        </div>
        <div class="col-md-1" id="logout">
            <form action="/logout" method="post">
                {{-- SECURITY --}}
                @csrf
                <button class="btn btn-outline-success">Logout</button>
            </form>
        </div>
    </nav>
@endsection
