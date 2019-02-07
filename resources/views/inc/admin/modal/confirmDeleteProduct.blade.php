<div id="deleteProduct" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
                {{-- Pasar id del producto --}}
                Are you sure you want to delete the product #id?
            </div>
            <div class="modal-footer">
                <a href="{{ url('user/3/products/3/delete') }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>