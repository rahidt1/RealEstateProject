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
          <div class="card-header" style="color: white">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body" style="color: white">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Property Name</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>Owner</th>
                    <th>Agent Name</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                </thead>

                <tbody>
                  
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>Florida</td>
                    <td>$120,000</td>
                    <td>779 S. Edgewater St. Miami, FL 33174</td>
                    <td>Tanvir Ahmed</td>
                    <td>Saimon Chowdhury</td>
                    <td class="text-center">
              

                      <a class="btn btn-raised btn-primary btn-sm" href="#" ><i class="fas fa-user-edit"></i></a>
                      &nbsp;&nbsp; 

                      <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <div id="#" class="modal fade" role="dialog">
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
                              <a class="btn btn-success" href="#">Yes</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                        
                    </td>
                  </tr>
                  

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