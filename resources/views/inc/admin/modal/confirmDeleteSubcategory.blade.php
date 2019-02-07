<div id="deleteSubcategory" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
                {{-- Pasar id de la subcategoria --}}
                Are you sure you want to delete the subcategory #id?
            </div>
            <div class="modal-footer">
                <a href="{{ url('user/3/subcategories/3/delete') }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>