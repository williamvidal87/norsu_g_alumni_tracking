<div>
    <header class="content__title">
        <h1>Degrees</h1>

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
                <button data-toggle="modal" wire:click="OpenDegreeForm" class="btn btn-primary btn--icon-text"><i class="zwicon-plus-circle"></i> Add Degree</button>
            </div>
            <div wire:ignore.self class="table-responsive data-table">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Degree Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($DegreeData as $data)
                            <tr>
                                <td>{{$data->educational_level_name}}</td>
                                <td>
                                    <button wire:click="EditDegree({{$data->id}})" data-toggle="modal" data-target="#DegreeModal" class="btn btn-info btn--icon-text btn-sm"><i class="zwicon-edit-square"></i>Edit</button>
                                    <button wire:click="DeleteDegree({{$data->id}})" class="btn btn-danger btn--icon-text btn-sm"><i class="zwicon-trash"></i>Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Vertically centered -->
    <div wire:ignore.self class="modal fade" id="DegreeModal" tabindex="-1" data-backdrop="static">
        <div class="modal-dialog">
            <livewire:admin-panel.degree.degree-form />
        </div>
    </div>
</div>
@section('custom_script')
    @include('layouts.scripts.degree-table-scripts'); 
@endsection