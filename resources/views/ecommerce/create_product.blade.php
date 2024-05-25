@extends('../base')
@section('content')
        <form action="{{ route('store_product')  }}" method="POST" enctype="multipart/data-form">
        <div class="form-group">
        <div class="container">


            @csrf
            <label for="product_name">product name</label>
            <input id="product_name" name="product_name" class="form-control form-control-lg form-item" type="text" placeholder=".product name">

           
            <br/>
            <label for="quantity">quantity</label>
            <input type="number" name="quantity" id="quantity"  class="form-control form-control-lg form-item" type="text" placeholder=".quantity">

            <br/>
            <label for="category"> category</label>
            <input  type="text" name="category" id="category" class="form-control form-control-lg form-item" type="text" placeholder=".category">

            <br/>
            <label for="price" >price</label>
            <input  type="number" name="price" id="price"  class="form-control form-control-lg form-item" type="text" placeholder=".price">

            <br/>
            <label for="image_product" >Image Product</label>
            <input type="file" class="form-control-file" id="image_product" name="image_product">
            <br/>

            
            <button type="submit" class="btn btn-primary">Validate</button>

</div>
</div>
        </form>


    
@endsection