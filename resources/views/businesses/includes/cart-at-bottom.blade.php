<nav class="navbar bg-body-tertiary sticky-bottom">
    <div class="container">
        <a type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#cartDetail">
            <i class="nav-icon fas fa-2x fa-shopping-cart">
                <cart-count-component :cartcount="totalItems" ></cart-count-component>
            </i>
        </a>
    </div>
</nav>