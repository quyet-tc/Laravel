@extends("layout")
@section("title","Create a new category")
@section("contentHeader","Create a new category")
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Please enter</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/update-product/{$product->__get("id")}")}}" method="post">
            @method("PUT")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name</label>
                    <input value="{{$product->__get("product")}}" class="form-control @error("product_name") is-invalid @enderror" type="text" name="product_name" placeholder="Enter Name"/>
                    @error("product_name")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
