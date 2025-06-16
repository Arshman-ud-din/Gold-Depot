 <!--begin::Body-->

 <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
     <!--begin::App Wrapper-->
     <div class="app-wrapper">
         <!--begin::Header-->
         <nav class="app-header navbar navbar-expand bg-body">
             <!--begin::Container-->
             <div class="container-fluid">
                 <!--begin::Start Navbar Links-->
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                             <i class="bi bi-list"></i>
                         </a>
                     </li>

                 </ul>
                 <!--end::Start Navbar Links-->
                 <!--begin::End Navbar Links-->
                 <ul class="navbar-nav ms-auto">

                     <li class="nav-item">
                         <a href="{{ route('web.index') }}" class="btn btn-info">Website</a>
                     </li>

                     <li class="nav-item d-flex align-items-center px-2">
                         <span class="text-white fs-5">/</span>
                     </li>
                     <li class="nav-item d-flex align-items-center px-2">
                         <span class="text-white fs-5">/</span>
                     </li>

                     <li class="nav-item dropdown user-menu">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             <img src="{{ asset('assets/admin/images/user2-160x160.jpg') }}"
                                 class="user-image rounded-circle shadow" alt="User Image" />
                             <span class="d-none d-md-inline">Alexander Pierce</span>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                             <li class="user-header text-bg-primary">
                                 <img src="{{ asset('assets/admin/images/user2-160x160.jpg') }}"
                                     class="rounded-circle shadow" alt="User Image" />
                                 <p>
                                     Alexander Pierce - Web Developer<br>
                                     <small>Member since Nov. 2023</small>
                                 </p>
                             </li>
                             <li class="user-body">
                                 <div class="row">
                                     <div class="col-4 text-center"><a href="#">Followers</a></div>
                                     <div class="col-4 text-center"><a href="#">Sales</a></div>
                                     <div class="col-4 text-center"><a href="#">Friends</a></div>
                                 </div>
                             </li>
                             <li class="user-footer">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                                 <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                             </li>
                         </ul>
                     </li>
                 </ul>

                 <!--end::End Navbar Links-->
             </div>
             <!--end::Container-->
         </nav>
         <!--end::Header-->
         <!--begin::Sidebar-->
         <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
             <!--begin::Sidebar Brand-->
             <div class="sidebar-brand">
                 <!--begin::Brand Link-->
                 <a href="{{ route('adminhome.index') }}" class="brand-link">
                     <!--begin::Brand Image-->
                     <img src="{{ asset('assets/admin/images/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                         class="brand-image opacity-75 shadow" />
                     <!--end::Brand Image-->
                     <!--begin::Brand Text-->
                     <span class="brand-text fw-light">AdminLTE 4</span>
                     <!--end::Brand Text-->
                 </a>
                 <!--end::Brand Link-->
             </div>
             <!--end::Sidebar Brand-->
             <!--begin::Sidebar Wrapper-->
             <div class="sidebar-wrapper">
                 <nav class="mt-2">
                     <!--begin::Sidebar Menu-->
                     <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                         data-accordion="false">


                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                 <p>
                                     Product
                                     <i class="nav-arrow bi bi-chevron-right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{ route('adminproduct.create') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Add Product</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('adminproduct.index') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Show Product</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                 <p>
                                     Product Category
                                     <i class="nav-arrow bi bi-chevron-right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{ route('admincategory.create') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Add Product Catgory</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('admincategory.index') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Show Product Category</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                 <p>
                                     Blogs
                                     <i class="nav-arrow bi bi-chevron-right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{ route('adminblog.create') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Add Blog</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('adminblog.index') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Show Blogs</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                 <p>
                                     Attributes
                                     <i class="nav-arrow bi bi-chevron-right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{ route('adminattribute.create') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Add Attributes</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('adminattribute.index') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Show Attributes</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                 <p>
                                     Variants
                                     <i class="nav-arrow bi bi-chevron-right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{ route('adminvariants.create') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Add Variants</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('adminvariants.index') }}" class="nav-link">
                                         <i class="nav-icon bi bi-palette"></i>
                                         <p>Show Variants</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('adminregistereduser.index') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>Registered User</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('adminproduct.create') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>Add Product</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('adminfeedback.index') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>FeedBacks</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('adminusercontacts.index') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>User Contacts</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('adminorder.index') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>Orders</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admincarousel.create') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>Add Carousel Images</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('admincarousel.index') }}" class="nav-link">
                                 <i class="nav-icon bi bi-palette"></i>
                                 <p>Show Carousel Images</p>
                             </a>
                         </li>




                     </ul>
                     <!--end::Sidebar Menu-->
                 </nav>
             </div>
             <!--end::Sidebar Wrapper-->
         </aside>
         <!--end::Sidebar-->
