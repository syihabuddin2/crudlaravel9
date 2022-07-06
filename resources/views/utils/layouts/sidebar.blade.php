@section('sidebar')
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 bg-light sidebar">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product*') ? 'active' : '' }}" href="/product">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Products
                    </a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('scripts')
    <script>
        feather.replace()
    </script>
@endsection
