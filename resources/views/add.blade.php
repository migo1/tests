<!DOCTYPE html>
<html>
<head>
    <title>Add/remove multiple input fields dynamically with Jquery Laravel 5.8</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
   
<div class="container">
    <h2 align="center">Add/remove multiple input fields dynamically with Jquery Laravel 5.8</h2> 
   
 
<table class="table">
 <thead>
     <tr>
         <td>name</td>
         <td>quantity</td>
         <td>price</td>
         <td>action</td>
     </tr>
 </thead>
 <tbody>
     @foreach ($products as $product)
         
     <tr>
     <td>{{ $product->name }}</td>
     <td>{{ $product->qty }}</td>
     <td>{{ $product->price }}</td>
     <td>
        <a href="{{}}" class="btn  btn-primary">edit</a>
         <a href="" class="btn btn-sm btn-danger">delete</a>

     </td>

     </tr>
     @endforeach

 </tbody>
</table>


</div>
   
{{-- <script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script> --}}
  
</body>
</html>