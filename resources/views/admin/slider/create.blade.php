@extends('layouts.admin.app')

@section('title', 'Add Slider')

@push('css')

@endpush

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Slider</h4>
                {!! Form::open(['route' => 'slider.store', 'method' => 'POST'],['class'=>'cmxform', 'id'=>'commentForm'])  !!}
                  <div class="form-group">

                    {{ Form::label('slider_heading', 'Slider Heading') }}
                    {{ Form::text('slider_heading', null, ['class' => 'form-control']) }}

                  </div>

                  <div class="form-group">

                    {{ Form::label('slider_sub_head', 'Slider Sub Heading') }}
                    {{ Form::number('slider_sub_head', null, ['class' => 'form-control']) }}

                  </div>

                  <div class="form-group">
                    {{ Form::label('', 'Slider Image') }}
                    {{ Form::file('slider_image', ['class' => 'form-control']) }}

                  </div>

                  <div class="form-group">
                    {{ Form::label('','Slider Status') }}
                    {{ Form::checkbox('slider_status','', 'true', ['class' => 'form-control']) }}
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

@endpush
