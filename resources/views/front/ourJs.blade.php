<script>
$(document).ready(function(){
//get category id
  
   
    $("#findBtn").click(function(){
       var cat = $("#catID").val();
       var price = $("#priceID").val();
//alert(cat);
         $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/productsCat')}}',
      data: 'cat_id=' + cat + '&price=' + price,  
      success:function(response){
        console.log(response);
        $("#productData").html(response);
      }
    });
    });
    
});
</script>
