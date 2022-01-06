@include('AdminPanel.layouts.start')
@include('AdminPanel.layouts.navbar')

<div class="container-fluid">
    <div class="row">
        @include('AdminPanel.layouts.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('main-section')
        </main>
    </div>
</div>
@include('AdminPanel.layouts.end')
