<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.orders')}}">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.products')}}">
                    <span data-feather="file"></span>
                    Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="file"></span>
                    Category
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('employee.list')}}">
                    <span data-feather="file"></span>
                    Employees
                </a>
            </li>

            

        </ul>

    </div>
</nav>
