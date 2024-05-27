<div>
    <header class="content__title">
        <h1>User Management</h1>

        <div class="actions">
            <a href="" class="actions__item zwicon-cog"></a>
            <a href="" class="actions__item zwicon-refresh-double"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zwicon-more-h"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Refresh</a>
                    <a href="" class="dropdown-item">Manage Widgets</a>
                    <a href="" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <button data-toggle="modal" wire:click="OpenAlumniForm" class="btn btn-primary btn--icon-text"><i class="zwicon-plus-circle"></i> Add User</button>
            </div>
            <div wire:ignore.self class="table-responsive data-table">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Alumni Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AlumniData as $data)
                            <tr>
                                <td>{{$data->last_name.' '.$data->name.' '.$data->middle_name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->getCourse->course_name ?? 'none'}}</td>
                                <td>
                                    <button wire:click="EditAlumni({{$data->id}})" data-toggle="modal" data-target="#AlumniModal" class="btn btn-info btn--icon-text btn-sm"><i class="zwicon-edit-square"></i>Edit</button>
                                    <button wire:click="DeleteAlumni({{$data->id}})" class="btn btn-danger btn--icon-text btn-sm"><i class="zwicon-trash"></i>Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Vertically centered -->
    <div wire:ignore.self class="modal fade" id="AlumniModal" tabindex="-1" data-backdrop="static">
        <div class="modal-dialog">
            <livewire:admin-panel.manage-user.alumni-form />
        </div>
    </div>
</div>
@section('custom_script')
    @include('layouts.scripts.alumni-table-scripts'); 
@endsection