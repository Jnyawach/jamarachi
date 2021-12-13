<div class="row">
    <div class="col-9">
        <ul class="nav ms-3">
            <li class="nav-item">
                <a href="{{route('products.index')}}" class="btn btn-link {{ (request()->is('admin/homepage/products'))? 'text-decoration-underline' :'text-decoration-none' }}">All Products</a>
            </li>

            <li class="nav-item">
                <a href="{{route('productActive')}}" class="btn btn-link {{ (request()->is('admin/homepage/products/active')) ?'text-decoration-underline' : 'text-decoration-none' }}">Live</a>
            </li>
            <li class="nav-item">
                <a href="{{route('productInactive')}}" class="btn btn-link {{ (request()->is('admin/homepage/products/inactive')) ?'text-decoration-underline' : 'text-decoration-none' }}">In-active</a>
            </li>
            <li class="nav-item">
                <a href="{{route('soldOut')}}" class="btn btn-link {{ (request()->is('admin/homepage/products/soldout')) ?'text-decoration-underline' : 'text-decoration-none' }}">Sold Out</a>
            </li>
            <li class="nav-item">
                <a href="{{route('selling')}}" class="btn btn-link {{ (request()->is('admin/homepage/products/selling')) ?'text-decoration-underline' : 'text-decoration-none' }}">Best Selling</a>
            </li>

        </ul>



    </div>
    <div class="col-3">
        <a href="{{route('products.create')}}" class="btn btn-primary float-end m-2">Create</a>
    </div>
</div>
