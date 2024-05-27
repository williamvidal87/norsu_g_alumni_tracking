<div>
    <header class="content__title">
        <h1>Alumni Management</h1>

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
                {{-- <button data-toggle="modal" wire:click="OpenAlumniForm" class="btn btn-primary btn--icon-text"><i class="zwicon-plus-circle"></i> Add User</button> --}}
            </div>
            <div wire:ignore.self class="table-responsive data-table">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Alumni Name</th>
                            <th>Graduation Year</th>
                            <th>Course</th>
                            <th>Employment Status</th>
                            <th>Occupation/Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AlumniData as $data)
                            <tr>
                                <td>{{$data->last_name.' '.$data->name.' '.$data->middle_name}}</td>
                                <td>{{$data->year_graduate ?? 'none'}}</td>
                                <td>{{$data->getCourse->abrivation_name ?? 'none'}}</td>
                                <td>{{$data->getEmploymentStatus->employment_status_name ?? 'none'}}</td>
                                <td>{{$data->present_occupation ?? 'none'}}</td>
                                <td>
                                    <button wire:click="EditAlumni({{$data->id}})" data-toggle="modal" data-target="#AlumniModal" class="btn btn-warning btn--icon-text btn-sm"><i class="zwicon-edit-square"></i>Update</button>
                                    {{-- <button wire:click="DeleteAlumni({{$data->id}})" class="btn btn-danger btn--icon-text btn-sm"><i class="zwicon-trash"></i>Delete</button> --}}
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
        <div class="modal-dialog modal-xl">
            <livewire:admin-panel.alumni-management.alumni-management-form />
        </div>
    </div>
</div>
@section('custom_script')
    @include('layouts.scripts.alumni-management-table-scripts'); 
@endsection