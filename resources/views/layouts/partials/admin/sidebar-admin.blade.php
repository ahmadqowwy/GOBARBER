 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.dashboard.page') }}">
                 <i class="icon-grid menu-icon"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
         @if (Auth::user()->admin->role == 'admin')
             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                     aria-controls="ui-basic">
                     <i class="icon-layout menu-icon"></i>
                     <span class="menu-title"> Data BarberShop</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse" id="ui-basic">
                     <ul class="nav flex-column sub-menu">
                         {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('admin.owner.index') }}">Owner</a></li> --}}
                         <li class="nav-item"> <a class="nav-link" href="{{ route('admin.shop.index') }}">Shop</a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                     <i class="icon-head menu-icon"></i>
                     <span class="menu-title">
                         Master
                     </span>
                     <i class="menu-arrow"></i>
                 </a>

                 <div class="collapse" id="auth">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.manajemen.user.page') }}">
                                 Data User
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
         @endif
     </ul>
 </nav>
