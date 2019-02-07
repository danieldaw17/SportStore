<div id="deleteUser" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
                {{-- Pasar id del usuario --}}
                Are you sure you want to delete the user #id?
            </div>
            <div class="modal-footer">
                <a href="{{ url('user/3/users/3/delete') }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>