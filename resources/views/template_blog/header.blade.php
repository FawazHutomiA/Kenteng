<!-- HEADER -->
<header id="header">
    <!-- NAV -->
    <div id="nav">
        <!-- Top Nav -->
        <div id="nav-top">
            <div class="container">

                <!-- logo -->
                <div class="nav-logo">
                    <a href="index.html" class="logo"><img src="{{ asset('public/frontend/img/logo.png')}}" alt=""></a>
                </div>
                <!-- /logo -->

                <!-- search & aside toggle -->
                <div class="nav-btns">
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div id="nav-search">
                        <form action="{{route('blog.cari')}}" method="get">
                            <input class="input" name="cari" placeholder="Enter your search...">
                        </form>
                        <button class="nav-close search-close">
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- /search & aside toggle -->
            </div>
        </div>
        <!-- /Top Nav -->

        <!-- Main Nav -->
        <div id="nav-bottom">
            <div class="container">
                <!-- nav -->
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="has-dropdown">
                        <a href="#">CATEGORY</a>
                        <div class="dropdown">
                            <div class="dropdown-body">
                                <ul class="dropdown-list">
                                @foreach($category_widget as $kategori)
                                <li><a href="{{route('blog.category', $kategori->slug)}}">{{$kategori->name}}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="{{url('/list-post')}}">List Post</a></li>
                    <li><a href="{{url('/profil')}}">Profile</a></li>
                    <li><a href="{{url('/kontak')}}">Contact</a></li>
                    <!-- <li><a href="#">Daftar Harga</a></li> -->
                </ul>
                <!-- /nav -->
            </div>
        </div>
        <!-- /Main Nav -->
    </div>
    <!-- /NAV -->
</header>
<!-- /HEADER -->
