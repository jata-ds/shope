
<table width="100%" class="table table-hover table-striped" >
<tr >
                          <td colspan="5" style="color: green;" align="center"><b>Total:</b> {{App\products::count()}}</td>
                            </tr>
   <tr style="border-bottom:1px solid #ccc;">
    <th style="padding:10px">Product Name</th>
    <th style="padding:10px">Product code</th>
    <th style="padding:10px">Product Price</th>
    <th style="padding:10px">Category </th>
    
    <th style="padding:10px">Update</th>
   </tr>
@foreach($data as $product)
  <tr style="height:50px">
    <td style="padding:10px" >{{$product->pro_name}}</td>
    <td style="padding:10px">{{$product->pro_code}}</td>
    <td style="padding:10px">{{$product->pro_price}}</td>
    <td style="padding:10px">{{$product->cats->cat_name}}</td> 
    <td><a href="{{url('admin/editProduct')}}/{{$product->id}}"><button type="button" class="btn btn-fill btn-sm btn-success">Edit</button></a> </td>
  </tr>
@endforeach
</table>

