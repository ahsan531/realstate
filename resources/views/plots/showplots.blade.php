@extends('layouts.app')
@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
        <div class="card">
            <h5 class="card-header">Plots Details</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Plot No</th>
                            <th>Facing</th>
                            <th>Block No</th>
                            <th>Size In Sq Feet</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($plotdata as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->plot_no }}</td>
                            <td>
                                {{ $data->facing }}
                            </td>
                            <td><span class="badge bg-label-primary me-1"> {{ $data->block }}</span></td>
                            <td>{{$data->size_in_yard}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href='{{url("editplot/$data->id")}}'><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                            <a class="dropdown-item" href="javascript:;" onclick="delete_model({{$data->id}})">
                                                <i class="bx bx-trash me-1"></i>Delete
                                            </a>
                                            
                                            
                                          
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  
                </table>
            </div>
        </div>
    </div>
   



    <div class="modal fade" id="delete_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLongTitle">DELETE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="delete-form-" action="{{ route('plot_delete') }}" method="POST">
                    <input type="hidden" readonly id="delete_id" name="id">
                    @csrf
                    <div class="modal-body">
                        <p>Are you sure you want to delete this record?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
            </form>
            </div>
        </div>
    </div>


    <script>
        function delete_model(id){
            $("#delete_id").val(id);
            $("#delete_model").modal('show');
        }
    </script>

@endsection
