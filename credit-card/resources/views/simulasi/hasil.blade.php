@extends('templates.default')

@section('content')

<br></br>
<br></br>
<div class="clearfix"></div>
                  <div class="x_content">
                      <div class="row">
                      
                            <div class="card-box table-responsive">
                    
                    <div id="datatable_wrapper" class="dataTables_wrapper container-fluid  no-footer">
                    <div class="row">
               
                  <div class="col-sm-12">
                  <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid">
                      <thead>
                        <tr role="row">
                        <th>HASIL</th>
                        </tr>
                     </thead>

                     <tbody>
                         <tr>
                         @if($simulasi=='1')
                              <td>Approve</td>
                         @else
                              <td>Not Approve</td>
                        @endif
                        </tr>
                          
                      </tbody>
                  </table>
                  </div>
                </div>
                </div>
                </div>
                </div>
                </div>

@stop