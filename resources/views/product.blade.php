<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload Product</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
	<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="uplaodExcel">Upload Excel</label>
	    <input type="file" name="product" class="form-control" id="uplaodExcel" >
	    @error("product")
	    <small class="form-text text-danger">{{$message}}</small>
		@enderror
	   
	  </div>
	  

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	@if (Session::has('success'))
		Swal.fire({
  			icon: 'success',
  			title: 'Success',
  			text: '{{Session::get('success')}}',
  		})
	@endif
</script>
</body>

</html>
