@extends('admin.layouts.app',['title'=>$product->name])
@section('content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="{{route('admin.home')}}">Dashboard</a>
            <span class="breadcrumb-item active">Product Details</span>
        </nav>
      <div class="sl-pagebody">

 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product Details Page  </h6>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->product_code }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->quantity }}</strong>

                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->category->category_name }}</strong>

                </div>
              </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->subcategory->subcategory_name }}</strong>

                </div>
              </div><!-- col-4 -->



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
          <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
               <br>
                  <strong>{{ @$product->brand->brand_name }}</strong>
                </div>
              </div><!-- col-4 -->


<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                    <br>
                  <strong>{{ $product->size }}</strong>
                </div>
              </div><!-- col-4 -->

<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                    <br>
                  <strong>{{ $product->color }}</strong>

                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->price }}</strong>

                </div>
              </div><!-- col-4 -->


               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                  <br>
                 <p>   {!! $product->details !!} </p>

                </div>
              </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->video }}</strong>

                </div>
              </div><!-- col-4 -->



 <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One ( Main Thumbnali): <span class="tx-danger">*</span></label><br>
                 <label class="custom-file">

                     <img height="70px" width="70px" src="{{asset('public/media/product/'.$product->image_one) }}">

                 </label>

                </div>
              </div><!-- col-4 -->


               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label><br>
                 <label class="custom-file">
                     <img height="70px" width="70px"  src="{{asset('public/media/product/'.$product->image_two) }}">

                 </label>

                </div>
              </div><!-- col-4 -->




 <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label><br>
                 <label class="custom-file">
                     <img height="70px" width="70px"  src="{{asset('public/media/product/'.$product->image_three) }}">


                 </label>

                </div>
              </div><!-- col-4 -->

            </div><!-- row -->

  <hr>
  <br><br>

          <div class="row">

        <div class="col-lg-4">
        <label class="">
         @if($product->main_slider == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif

          <span>Main Slider</span>
        </label>

        </div> <!-- col-4 -->

         <div class="col-lg-4">
        <label class="">
         @if($product->hot_deal == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif

          <span>Hot Deal</span>
        </label>

        </div> <!-- col-4 -->



         <div class="col-lg-4">
       <label class="">
         @if($product->best_rated == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif

          <span>Best Rated</span>
        </label>

        </div> <!-- col-4 -->


         <div class="col-lg-4">
       <label class="">
         @if($product->trend == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif

          <span>Trend Product </span>
        </label>

        </div> <!-- col-4 -->

 <div class="col-lg-4">
        <label class="">
         @if($product->mid_slider == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif

          <span>Mid Slider</span>
        </label>

        </div> <!-- col-4 -->

<div class="col-lg-4">
       <label class="">
         @if($product->hot_new == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif

          <span>Hot New </span>
        </label>

        </div> <!-- col-4 -->


          </div><!-- end row -->




          </div><!-- form-layout -->
        </div><!-- card -->


        </div><!-- row -->


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->






@endsection
