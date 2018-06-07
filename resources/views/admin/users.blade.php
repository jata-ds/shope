@extends('admin.master') @section('title', 'Admin') @section('content')
<script>
  $(document).ready(function () {
     
      @foreach($data as $user)
      $("#selectDiv{{$user->id}}").hide();
      $("#showSelectDiv{{$user->id}}").click(function(){
      $("#selectDiv{{$user->id}}").show();
      });  
     $("#loginStatus{{$user->id}}").change(function(){
        var status = $("#loginStatus{{$user->id}}").val();
        var userID = $("#userID{{$user->id}}").val();
        if(status==""){
            alert('Please Select Option');
        }else{
            $.ajax({
                url:'{{url("/admin/banUser")}}',
                data: 'status=' +status+ '&userID=' +userID,
                type: 'get',
                success:function(response){
                    console.log(response);
                }
            });
        }
       
     });
     @endforeach
  });
</script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">

                    <div class="content">
                        <h2>User</h2>
                        <p>Etiam et tellus sem. Etiam blandit sollicitudin lectus vitae faucibus. Donec et massa fringilla.</p>
                        <div class="footer">
                            <p>hasellus non imperdiet sem, vel posuere tellus</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">

                    <div class="content">
                        <table width="100%" class="table table-hover table-striped">
                            <tr style="border-bottom:1px solid #ccc;">
                                <th style="padding:10px"> Name</th>
                                <th style="padding:10px"> Email</th>
                                <th style="padding:10px"> Status</th>
                                <th style="padding:10px"> Role</th>
                                <th style="padding:10px">Login Status </th>
                            </tr>
                            @foreach($data as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->status==0)
                                   <b style="color:green;">Enable</b> 
                                    @else
                                  <b style="color:red;">Disable</b>  
                                    @endif
                                    <button id="showSelectDiv{{$user->id}}"
                                        class="btn btn-primary btn-fill">
                                        Change status
                                      </button>
                                      <div id="selectDiv{{$user->id}}">
                                    <!-- <button id="showSelectDiv{{$user->id}}"></button>
                                    <div id="selectDiv{{$user->id}}"></div> -->
                                    <input type="hidden" id="userID{{$user->id}}" value="{{$user->id}}" >
                                    <select class="form-control" id="loginStatus{{$user->id}}">
                                        <option value="">Select Option</option>
                                        <option value="0"> Enable</option> 
                                        <option value="1"> Disable</option> 
                                    </select>
</div>
                                </td>
                                <td>{{$user->role}}</td>
                                <td ><a href="" class="btn btn-fill btn-success">Action</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection