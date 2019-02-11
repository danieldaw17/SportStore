<div class="menuManagement" id="menuProductManagement">
    <ul>
        <li><a href="{{ url('user/4/productManagement') }}">Products</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/Categories') }}">Categories</a></li>
        <li><a href="{{ url('user/4/productManagement/subcategories') }}">Subcategories</a></li>
        <li><a href="{{ url('user/4/productManagement/brands') }}">Brands</a></li>
        <li><a href="{{ url('user/4/productManagement/sports') }}">Sports</a></li>
        <li><a href="#">Stock</a></li>
    </ul>
</div>
