 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.dashboard.page') }}">
                 <i class="icon-grid menu-icon"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
         
         <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#ui-shop" aria-expanded="false"
                 aria-controls="ui-shop">
                 <i class="icon-layout menu-icon"></i>
                 <span class="menu-title"> Manajemen Toko</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-shop">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ route('shop.index') }}">Data Toko</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('barber.index') }}">Barberman</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('service.index') }}">Service</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('manage-produk.index') }}">Produk</a></li>
                 </ul>
             </div>
         </li>
         
         <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#ui-transaction" aria-expanded="false"
                 aria-controls="ui-transaction">
                 <i class="icon-paper menu-icon"></i>
                 <span class="menu-title"> Transaksi</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-transaction">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ route('customer.index') }}">Customer</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('booking.index') }}">Booking</a></li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('payment.index') }}">Payment</a></li>
                 </ul>
             </div>
         </li>

         @if (Auth::user()->admin->role == 'admin')
             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                     <i class="icon-head menu-icon"></i>
                     <span class="menu-title">
                         Master Data
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
