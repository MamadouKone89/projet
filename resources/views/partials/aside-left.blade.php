<aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background-color: #870913;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/img/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">
            <strong style="font-size: 1rem;font-weight: bold">Ministère de la justice</strong>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{!! url('/img/avatar.png') !!}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <strong style="color:#FFF">{{ Auth::user()->name }}</strong>
            </div>
        </div>
        @include('partials.menu')
    </div>
    <!-- /.sidebar -->
</aside>