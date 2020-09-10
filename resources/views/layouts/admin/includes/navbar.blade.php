<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('category.create') }}">Add Category</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}">All Category</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('product.create') }}">Add Product</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">All Product</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Slider</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="slider">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('slider.create') }}">Add Slider</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('slider.index') }}">All Slider</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Orders</span>
          <i class="menu-arrow"></i>
        </a>
      </li>

    </ul>
  </nav>
