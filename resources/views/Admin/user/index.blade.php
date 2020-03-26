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
                <div class="row" > 
                  <div class="col-md-10">
                       
                  </div>
                  <div class="col-md-2">
                    <a href="{{ route('showadduserform')}}" class="btn btn-outline-primary">Add Product</a>
                    
                  </div>
                    
                  <br>
                  <br>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>Order #</th>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php $i=0 ?>

                          @foreach($user as $row) 
                          <tr>

                            <td>{{$i=$i+1?$i=$i+1:''}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->password}}</td>
                            <td>{{$row->role->title}}</td>
                            <td><label class="badge {{ $row->status==1?'badge-info':'badge-primary' }}" >{{ $row->status==1?'active':'disable' }}</label></td>
                            
                           
                            <td>
                              <a href="{{ route('editusers',['id'=>$row->id])}}" class="btn btn-outline-primary">update</a>
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