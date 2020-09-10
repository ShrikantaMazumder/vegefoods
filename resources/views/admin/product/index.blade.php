@extends('layouts.admin.app')

@section('title', 'All Product')

@push('css')

@endpush

@section('content')
<div class="content-wrapper">



    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Order #</th>
                      <th>Purchased On</th>
                      <th>Customer</th>
                      <th>Ship to</th>
                      <th>Base Price</th>
                      <th>Purchased Price</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>10</td>
                      <td>2003/12/26</td>
                      <td>Tom</td>
                      <td>Germany</td>
                      <td>$1100</td>
                      <td>$2300</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                      <td>
                        <button class="btn btn-outline-primary">View</button>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
@endsection

@push('js')
<script src="{{ asset('backend/js/data-table.js') }}"></script>
@endpush
