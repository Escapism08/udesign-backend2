<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>categories</span></a>
</li>

<li class="{{ Request::is('brands*') ? 'active' : '' }}">
    <a href="{!! route('brands.index') !!}"><i class="fa fa-edit"></i><span>brands</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>products</span></a>
</li>

<li class="{{ Request::is('advertisments*') ? 'active' : '' }}">
    <a href="{!! route('advertisments.index') !!}"><i class="fa fa-edit"></i><span>advertisments</span></a>
</li>

<li class="{{ Request::is('promotions*') ? 'active' : '' }}">
    <a href="{!! route('promotions.index') !!}"><i class="fa fa-edit"></i><span>promotions</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>posts</span></a>
</li>

<li class="{{ Request::is('events*') ? 'active' : '' }}">
    <a href="{!! route('events.index') !!}"><i class="fa fa-edit"></i><span>events</span></a>
</li>

<li class="{{ Request::is('vendors*') ? 'active' : '' }}">
    <a href="{!! route('vendors.index') !!}"><i class="fa fa-edit"></i><span>vendors</span></a>
</li>

<li class="{{ Request::is('vendors*') ? 'active' : '' }}">
    <a href="{!! route('vendors.index') !!}"><i class="fa fa-edit"></i><span>vendors</span></a>
</li>

<li class="{{ Request::is('packages*') ? 'active' : '' }}">
    <a href="{!! route('packages.index') !!}"><i class="fa fa-edit"></i><span>packages</span></a>
</li>

<li class="{{ Request::is('vendorGuys*') ? 'active' : '' }}">
    <a href="{!! route('vendorGuys.index') !!}"><i class="fa fa-edit"></i><span>vendor_guys</span></a>
</li>

<li class="{{ Request::is('newProducts*') ? 'active' : '' }}">
    <a href="{!! route('newProducts.index') !!}"><i class="fa fa-edit"></i><span>new_products</span></a>
</li>

<li class="{{ Request::is('productzs*') ? 'active' : '' }}">
    <a href="{!! route('productzs.index') !!}"><i class="fa fa-edit"></i><span>productzs</span></a>
</li>

