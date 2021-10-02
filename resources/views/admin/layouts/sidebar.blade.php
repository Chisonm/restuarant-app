<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{ url('/admin/dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Products</li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="" aria-controls="email">
          <i class="link-icon" data-feather="archive"></i>
          <span class="link-title">Add Food</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/admin/products') }}" class="nav-link">View All Food</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/product/create') }}" class="nav-link">Add New Food</a>
              </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Products Categories</li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#product-cat" role="button" aria-expanded="" aria-controls="product-cat">
          <i class="link-icon" data-feather="coffee"></i>
          <span class="link-title">Add Category</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="product-cat">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('categories') }}" class="nav-link">View All Categories</a>
            </li>
            <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#addcategory" class="nav-link">Add New Categories</a>
              </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>

@include('admin.partials.modal')
{{-- @include('admin.partials.addprodmodal') --}}

