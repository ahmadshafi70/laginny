@extends('admin.layouts.app')
@section('content')
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
              </nav>
            </div>
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
                            <th>title</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php $i=0 ?>
                          @foreach($products as $row) 
                          <tr>

                            <td>{{$i=$i+1?$i=$i+1:''}}</td>
                            <td>{{$row->title}}</td>
                            <td>
                              <a href="{{ route('editproducts',['id'=>$row->id])}}" class="btn btn-outline-primary">update</a>
                            </td>
                          </tr>
                          @endforeach
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
   
@endsection 