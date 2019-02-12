<div class="menuManagement" id="menuProductManagement">
    <ul>
        <li><a href="{{ url('user/'.Auth::user()->id.'/Categories') }}">Categories</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/brands') }}">Brands</a></li>
        <li><a href="{{ url('user/'.Auth::user()->id.'/sports') }}">Sports</a></li>
    </ul>
</div>
