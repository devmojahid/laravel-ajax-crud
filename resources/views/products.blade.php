<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="{{asset('main')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('main')}}/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
    <div class="container mt-5">
	<div class="row">
    <div class="col-md-2"></div>
		<div class="col-md-8">
      
      <h2 class="text-center">Ajax Crud</h2>
      <a href="" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#productModal">Add Products</a>
			<table class="table table-bordered">
      <thead>
     
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Praice</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $key=>$product)
            
       
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td>
            <a href="" class="btn btn-primary update_product_form" data-bs-toggle="modal" data-bs-target="#updateModal"
             data-id="{{$product->id}}"
             data-name="{{$product->name}}"
             data-price="{{$product->price}}"
             >
              <i class="las la-edit"></i>
            </a>
            <a
            class="btn btn-danger product_delete"
            data-id="{{$product->id}}"
            >
              <i class="las la-times"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
</table>
  {!! $products->links() !!}
		</div>
	</div>
	</div>
  @include('update_product_modal')
  @include('add_product_modal')
  @include('product_js')
   
  </body>
</html>

