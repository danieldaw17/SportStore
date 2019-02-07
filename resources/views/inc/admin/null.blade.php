<div class="datos" id="tableProducts">
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Taxes</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>#</td>
            <td>clothes</td>
            <td>21%</td>
            <td><a href="{{ url('productManagement/categorie') }}"><i class="far fa-edit"></i></a></td>
            <td><a href="#deleteCategory" data-toggle="modal"><i class="far fa-trash-alt"></i></a></td>
        </tr>
    </table>
</div>
@include("inc/admin/modal/confirmDeleteCategory")