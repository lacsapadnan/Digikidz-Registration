<aside class="main-sidebar sidebar-dark-yellow elevation-4">
    <a href="http://digikidz.test/dashboard" class="brand-link ">
        <img src="http://digikidz.test/vendor/adminlte/dist/img/digikidz.png" alt="Digikidz" class="brand-image elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-light ">
            Digikidz
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                <li class="nav-header ">
                    Menu
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://digikidz.test/home">
                        <i class="fas fa-fw fa-columns "></i>
                        <p>Dashboard</p>
                    </a>
                @if (auth()->user()->role=="marketing")
                    <li class="nav-item">
                        <a class="nav-link" href="http://digikidz.test/murid">
                            <i class="fas fa-fw fa-user "></i>
                            <p>Data Murid</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://digikidz.test/ortu">
                            <i class="fas fa-fw fa-user "></i>
                            <p>Data Orang Tua</p>
                        </a>
                    </li>
                @endif
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="http://digikidz.test/kurikulum">
                        <i class="fas fa-fw fa-book "></i>
                        <p>Data Kurikulum</p></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active " href="http://digikidz.test/user">
                        <i class="fas fa-fw fa-user "></i>
                        <p>Data User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>