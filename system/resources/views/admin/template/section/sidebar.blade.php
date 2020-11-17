@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}

@endphp

<nav class="navbar-default navbar-side fixed" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li class="{{checkRouteActive('beranda')}}">
                        <a href="{{url('beranda')}}"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li class="{{checkRouteActive('produk')}}">
                        <a href="{{url('produk')}}"><i class="fa fa-desktop"></i> Produk Saya</a>
                    </li>
					<li class="{{checkRouteActive('jual-produk')}}">
                        <a href="{{url('create')}}"><i class="fa fa-bar-chart-o"></i> Jual Produk</a>
                    </li>
                    <li class="{{checkRouteActive('kategori')}}">
                        <a href="{{url('kategori')}}"><i class="fa fa-qrcode"></i> Kategori  </a>
                    </li>
                    <li class="{{checkRouteActive('user')}}">
                        <a href="{{url('user')}}"><i class="fa fa-qrcode"></i> User  </a>
                    </li>
                    
                </ul>

            </div>

        </nav>