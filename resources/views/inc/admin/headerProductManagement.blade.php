<div class="menuManagement" id="menuProductManagement">
    <ul>
        <li><a href="{{ url('user/'.Auth::user()->id.'/Categories') }}">Categories</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/brands') }}">Brands</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/sports') }}">Sports</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/deactivated') }}">Products deactivated</a></li>
        <li><a href="{{ url('checkStock') }}">Check stock</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/deliveries') }}">Deliveries</a></li>
    </ul>
</div>
