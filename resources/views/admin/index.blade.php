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

              <h5 class="text-danger">Site Enquiries</h5>
              @if(session()->has('message'))
                  <div class="alert alert-success text-center" role="alert">
                      {{session('message')}}
                  </div>
              @endif
              <table class="table table-stripped w-100" id="table" >
                  <thead>
                      <tr>
                          <th>#</th>
                          <th class="text-danger">Name</th>
                          <th class="">Course</th>
                          <th class="">Phone</th>
                          <th class="">Email</th>
                          <th class="">Enquiry Date</th>
                          <th class="">Contacted?</th>
                          <th class="">Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($contacts as $contact)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$contact->names}}</td>
                          <td>{{$contact->course}}</td>
                          <td>{{$contact->phone}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->created_at->format('m-d-Y H:i A')}}</td>
                          <td class="text-center">
                              <i class="fa fa-check text-info {{$contact->contacted ? '' : 'd-none'}}"></i>
                               <span class="{{$contact->contacted ? 'd-none' : ''}}">
                                  <a class="btn btn-outline-dark btn-sm" href="{{ route('clear.enquiry') }}"
                                     onclick="event.preventDefault();
                                     document.getElementById('clear-form-{{$contact->id}}').submit();">
                                        {{ __('Clear') }}
                                    </a>

                                    <form id="clear-form-{{$contact->id}}" action="{{ route('clear.enquiry') }}" method="POST" class="d-none">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$contact->id}}">
                                        @method('put')
                                    </form>
                              </span>
                          </td>
                          <td class="text-center">
                                  <button class="btn btn-outline-danger btn-sm show_confirm" data-id="form-{{$contact->id}}">
                                      {{ __('Delete') }}
                                  </button>

                                  <form id="form-{{$contact->id}}" action="{{ route('delete.enquiry') }}" method="POST" class="d-none">
                                      @csrf
                                      @method('delete')
                                      <input type="hidden" name="id" value="{{$contact->id}}">
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
                   title: `Are you sure you want to delete this enquiry record?`,
                   text: "If you delete this, it will be gone forever.",
                   icon: "warning",
                   buttons: true,
                   dangerMode: true,
               })
                   .then((willDelete) => {
                       if (willDelete) {
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