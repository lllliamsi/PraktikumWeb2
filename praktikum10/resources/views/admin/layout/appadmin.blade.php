@include('admin.layout.top')
@include('admin.layout.menu')

<main>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </main>
    </div>
</main>

@include('admin.layout.bottom')