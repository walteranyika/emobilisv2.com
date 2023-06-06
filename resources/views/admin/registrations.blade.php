@extends('layouts.app')

@section('extra-links')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
@endsection

@section('content')
   <div class="container">
       <div class="row py-2 justify-content-center">
          <div class="col-sm-11">
              <h5 class="text-danger">Site Enrollments</h5>
              @if(session()->has('message'))
                  <div class="alert alert-success text-center" role="alert">
                      {{session('message')}}
                  </div>
              @endif
              <table class="table table-stripped w-100" id="table" >
                  <thead>
                      <tr>
                          <th>#</th>
                          <th class="">Name</th>
                          <th class="">Course</th>
                          <th class="">Phone</th>
                          <th class="">Email</th>
                          <th class="">Preferred Time</th>
                          <th class="">Date Registered</th>
                          <th class="">Contacted?</th>
                          <th class="text-danger">Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($prospects as $prospect)
                      <tr>
                          <td class="small ">{{$loop->iteration}}</td>
                          <td class="small ">{{$prospect->full_names}}</td>
                          <td class="small ">{{$prospect->program}}</td>
                          <td class="small ">{{$prospect->phone}}</td>
                          <td class="small ">{{$prospect->email}}</td>
                          <td class="small ">{{$prospect->timing}}</td>
                          <td class="small ">{{$prospect->created_at->format('m-d-Y H:i A')}}</td>
                          <td class="text-center">
                              <i class="fa fa-check text-success {{$prospect->contacted ? '' : 'd-none'}}"></i>
                              <span class="{{$prospect->contacted ? 'd-none' : ''}}">
                                  <a class="btn btn-outline-dark btn-sm" href="{{ route('clear.registrations') }}"
                                     onclick="event.preventDefault();
                                     document.getElementById('clear-form-{{$prospect->id}}').submit();">
                                        {{ __('Clear') }}
                                    </a>

                                    <form id="clear-form-{{$prospect->id}}" action="{{ route('clear.registrations') }}" method="POST" class="d-none">
                                        @csrf
                                         <input type="hidden" name="id" value="{{$prospect->id}}">
                                        @method('put')
                                    </form>
                              </span>
                          </td>
                          <td>
                              <a href="{{ route('delete.registrations') }}" data-id="form-{{$prospect->id}}" class="btn btn-outline-danger btn-sm show_confirm">
                                  {{ __('Delete') }}
                              </a>

                              <form id="form-{{$prospect->id}}" action="{{ route('delete.registrations') }}" method="POST" class="d-none">
                                  @csrf
                                  @method('delete')
                                  <input type="hidden" name="id" value="{{$prospect->id}}">
                              </form>
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
       </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

   <script>
       $(document).ready(function() {
           $('.show_confirm').click(function(event) {
               let id =$(this).data("id");
               let form = $('#'+id);
               event.preventDefault();
               swal({
                   title: `Are you sure you want to delete this registration record?`,
                   text: "If you delete this, it will be gone forever.",
                   icon: "warning",
                   buttons: true,
                   dangerMode: true,
               }).then((willDelete) => {
                       if (willDelete) {
                       console.log(form);
                           form.submit();
                       }
                   });
           });

           $('#table').DataTable({
               "scrollX": true,
               dom: 'Bfrtip',
               buttons: [
                   'copy', 'csv', 'excel', 'pdf', 'print'
               ]
           } );
       } );
   </script>
@endsection