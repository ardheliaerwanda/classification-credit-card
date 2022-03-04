@extends('templates.default')

@section('content')



<br></br>
<br></br>
<div class="clearfix"></div>
<div class="x_content" style="margin-bottom: 26rem">
  <div class="row">

    <div class="card-box table-responsive">

      <div id="datatable_wrapper" class="dataTables_wrapper container-fluid no-footer">
        <div class="row">

          <div class="col-sm-12">
            <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width:100%"
              role="grid">
              <thead class="text-center">
                <tr role="row">
                  <th style="font-size: 5rem">RESULT</th>
                </tr>
              </thead>

              <tbody class="text-center">
                <tr>
                  @if($simulasi=='1')
                  <td>
                    <h1 style="font-size: 5rem;" class="text-success"><b>Approved</b></h1>
                    <br>
                    <img src="{{ asset('assets/img/icons/icon-v.jpeg') }}" style="width: 150; height: 150;">
                  </td>
                  @else
                  <td>
                    <h1 style="font-size: 5rem;" class="text-danger"><b>Rejected</b></h1>
                    <br>
                    <img src="{{ asset('assets/img/icons/icon-x.jpeg') }}" style="width: 150; height: 150;">
                  </td>
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