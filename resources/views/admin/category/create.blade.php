@extends('layouts.admin.app')

@section('title', 'Add Category')

@push('css')

@endpush

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Category</h4>
                {!! Form::open(['route' => 'category.store', 'method' => 'POST'],['class'=>'cmxform', 'id'=>'commentForm'])  !!}
                  <div class="form-group">

                    {{ Form::label('category_name', 'Category Name') }}
                    {{ Form::text('category_name', null, ['class' => 'form-control']) }}

                  </div>
                  {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

@push('js')

@endpush
