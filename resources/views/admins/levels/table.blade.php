@push('style')
<link href="{{ asset('pti/assets/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
@endpush

<div class="col-lg-12">
    <div class="card">

        <div class="card-header">
            <a class="btn btn-primary btn-sm btn-flat" href="{{ route('levels.create') }}">Create New Level </a>
        </div>
        
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($levels as $level)
                        <tr>
                            <td>{{ $level ->level_name }}</td>
                            <td>{{ $level ->level_status }}</td>
                            <td>{{ $level ->description }}</td>
                            
                            <td>
                                <a class="btn btn-info btn-flat" href="{{ route('levels.edit',$level->id) }}"> 
                                    <i class="fa fa-edit"></i>Edit </a>

                                <a class="btn btn-danger btn-flat btnDelete" href="#DeleteConfirmation" data-toggle="modal"
                                data-url="{{ route('levels.destroy' , $level->id) }}">
                                     <i class="fa fa-trash"></i>Deleted </a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>

@push('script')

<script>
    $('.btnDelete').on('click', function()
    {
        $('.formDelete').attr('action', $(this).data('url'))
    });
</script>

@endpush