<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link ">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        
        @if (Auth::user()->roles == 'Admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Admin Profil</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('profile.index') }}">
                        <i class=" bi bi-circle"></i><span>Profile</span>
                    </a>
                </li>    
                
                <li>
                    <a href="{{ route('product.index') }}">
                        <i class=" bi bi-circle"></i><span>Produk</span>
                    </a>
                </li>
               
            </ul>
        </li><!-- End Data Web Profile Nav -->
        @else
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               
                
                <li>
                    <a href="{{ route('product.index') }}">
                        <i class=" bi bi-circle"></i><span>Produk</span>
                    </a>
                </li>
               
            </ul>
        </li><!-- End Data Web Profile Nav -->
        @endif            
          
    </ul>

</aside>
