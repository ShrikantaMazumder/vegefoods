@extends('layouts.admin.app')

@section('title', 'Add Product')

@push('css')

@endpush

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Product</h4>
                {!! Form::open(['route' => 'product.store', 'method' => 'POST'],['class'=>'cmxform', 'id'=>'commentForm'])  !!}
                  <div class="form-group">

                    {{ Form::label('product_name', 'Product Name') }}
                    {{ Form::text('product_name', null, ['class' => 'form-control']) }}

                  </div>

                  <div class="form-group">

                    {{ Form::label('product_price', 'Product Price') }}
                    {{ Form::number('product_price', null, ['class' => 'form-control']) }}

                  </div>

                  <div class="form-group">
                      {{ Form::label('', 'Product Size') }}
                      {{ Form::select('size', ['L' => 'Large', 'S' => 'Small', 'M' => 'Medium'],null, ['placeholder' => 'Select Size', 'class' => 'form-control']) }}
                  </div>

                  <div class="form-group">
                    {{ Form::label('', 'Product Image') }}
                    {{ Form::file('product_image', ['class' => 'form-control']) }}

                  </div>

                  <div class="form-group">
                    {{ Form::label('','product Status') }}
                    {{ Form::checkbox('product_status','', 'true', ['class' => 'form-control']) }}
                  </div>
                    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                  {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
@endsection

@push('js')
<script src="{{ asset('backend/js/form-validation.js') }}"></script>
<script src="{{ asset('backend/js/bt-maxLength.js') }}"></script>
@endpush
