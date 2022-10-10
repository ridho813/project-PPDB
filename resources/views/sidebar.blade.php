     <!-- sidebar menu area start -->
     <div class="sidebar-menu">
         <div class="main-menu">
             <div class="menu-inner">
                 <nav>
                     <ul class="metismenu" id="menu">
                         <li class="active"><a href="index.php"><span>Home</span></a></li>
                         <li><a href="../"><span>Kembali ke Toko</span></a></li>
                         <li>
                             <a href="{{ url ('book') }}"><i class="ti-dashboard"></i><span>Kelola Buku</span></a>
                         </li>
                         <li>
                             <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola
                                     Perpustakaan
                                 </span></a>
                             <ul class="collapse">
                                 <li><a href="{{ url('category') }}">Kategori</a></li>
                                 <li><a href="{{ url('bookCategory') }}">Kategori Buku</a></li>
                             </ul>
                         </li>
                         <li><a href="customer.php"><span>Kelola Pelanggan</span></a></li>
                         <li><a href="user.php"><span>Kelola Staff</span></a></li>
                         <li>
                             <a href="{{ url('logout') }}"><span>Logout</span></a>

                         </li>

                     </ul>
                 </nav>
             </div>
         </div>
     </div>
     <!-- sidebar menu area end -->
