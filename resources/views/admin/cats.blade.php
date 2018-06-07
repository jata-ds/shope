<table width="100%" class="table table-hover table-striped">
    <tr>
        <td style="color: green;" colspan="4" align="center">
            <b>Total:</b> {{App\cats::count()}}
        </td>
    </tr>
    <tr style="border-bottom:1px solid #ccc;">
        <th style="padding:10px">Category Name</th>

        <th>Update</th>
    </tr>
    @foreach($data as $product)
    <tr style="height:50px">
        <td style="padding:10px">{{$product->cat_name}}</td>

        <td>
            <a class="btn btn-sm btn-fill btn-success" href="{{url('/admin/editProduct')}}/{{$product->id}}">Edit</td>
    </tr>
    @endforeach
</table>

 