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
            Property List</div><br>
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-md-12" align="right">
                <a href="{{ route('pdf') }}" class="btn btn-success">Save as PDF</a>
              </div>
              <table class="table table-bordered" id="tanvir" width="100%" cellspacing="0">
                <thead class="thead">
                  <tr>
                    <th>ID</th>
                    <th>Property Name</th>
                    <th>Location</th>
                    <th>Price($)</th>
                    <th>Address</th>
                    <th>Owner</th>
                    <th>Agent Name</th>
                    <th>Property Images</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($propertydata as $d)
                  <tr>
                    <td>{{ $d->id }}</td>
                    <td><a href="{{ route('singleproperty',$d->id) }}">{{ $d->propertyname }}</a></td>
                    <td>{{ $d->location }}</td>
                    <td>{{ $d->price }}</td>
                    <td>{{ $d->address }}</td>
                    <td>{{ $d->owner }}</td>
                    <td>{{ $d->agentname }}</td>
                    <td><img class="img" src="/propery/{{ $d->image }}"></td>
                    <td class="text-center">

                      <a class="btn btn-raised btn-primary btn-sm" href="{{ URL::to('/editaddproperty/'.$d->id) }}" ><i class="fas fa-user-edit"></i></a> 

                      <a class="btn btn-danger" data-toggle="modal" data-target="#{{ $d->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <div id="{{ $d->id }}" class="modal fade" role="dialog">
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
                              <a class="btn btn-success" href="{{ URL::to('/deleteaddproperty/'.$d->id)}}">Yes</a>
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