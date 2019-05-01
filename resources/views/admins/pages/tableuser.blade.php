@extends('admins.layouts.admin')
@section('abc')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header" style="color: pink">
            <i class="fas fa-table"></i>
            User List</div><br>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="tanvir" width="100%" cellspacing="0">
                <thead class="thead">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th>Role</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($userdata as $u)
                  <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->phone }}</td>
                    <td>{{ $u->address }}</td>
                    <td>{{ $u->date_of_birth }}</td>
                    <td>{{ $u->role }}</td>
                    <td class="text-center">
              

                      <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/edituser/'.$u->id) }}" ><i class="fas fa-user-edit"></i></a> 

                      <a class="btn btn-danger" data-toggle="modal" data-target="#{{ $u->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <div id="{{ $u->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Delete Confirmation</h4>
                            </div>
                            <div class="modal-body">
                              <p>Are You sure you want to delete?</p>
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-success" href="{{ URL::to('/deleteuser/'.$u->id)}}">Yes</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                        
                    </td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

</div>
@stop