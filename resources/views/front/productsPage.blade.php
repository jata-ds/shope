@foreach($data as $p)
<div class="col-xs-6 col-sm-4">
    <div class="itemBox">
        <div class="prod">
            <img src="{{url ('/public/img')}}/{{$p->pro_img}}" alt="" width="330px" height="360px" />
        </div>
        <label>{{$p->pro_name}}</label>
        <span class="hidden-xs">Code: {{$p->pro_code}}
            <br> {{$p->pro_info}}
        </span>
        <div class="addcart">
            <div class="price">Rs {{$p->pro_price}}</div>
            <div class="cartIco hidden-xs">
                <a href="{{url('/cart/add')}}/{{$p->id}}"></a>
            </div>
        </div>
    </div>
</div>
@endforeach