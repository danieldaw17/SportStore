<div id="deleteCategory" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
                {{-- Pasar id de la categoria --}}
                Are you sure you want to delete the category #id?
            </div>
            <div class="modal-footer">
                <a href="{{ url('user/'.Auth::user()->id.'/Categories/1/delete') }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>