<div>
    <header class="content__title">
        <h1>Dashboard</h1>

        <div class="actions">
            <a href="" class="actions__item zwicon-cog"></a>
            <a href="" class="actions__item zwicon-refresh-double"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zwicon-more-h"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Refresh</a>
                </div>
            </div>
        </div>
    </header>

    <div class="row quick-stats">
        <div class="col-sm-6 col-md-6">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>{{number_format(count($AlumniData),0)}}</h2>
                    <small>Total Alumni</small>
                </div>

                <div class="quick-stats__chart peity-bar">{{implode(',',str_split(count($AlumniData)))}}</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>{{number_format(count($AlumniUpdatedData),0)}}</h2>
                    <small>Alumni Updated account</small>
                </div>

                <div class="quick-stats__chart peity-bar">{{implode(',',str_split(count($AlumniUpdatedData)))}}</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>{{number_format(count($EmployedData),0)}}</h2>
                    <small>Total Employed </small>
                </div>

                <div class="quick-stats__chart peity-bar">{{implode(',',str_split(count($EmployedData)))}}</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="quick-stats__item">
                <div class="quick-stats__info">
                    <h2>{{number_format(count($UnEmployedData),0)}}</h2>
                    <small>Total Unemployed</small>
                </div>

                <div class="quick-stats__chart peity-bar">{{implode(',',str_split(count($UnEmployedData)))}}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Number Of Graduates Per Year</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Batch Year</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumniData as $data)
                                    <tr>
                                        <th>{{$data['batch_year']}}</th>
                                        <td>{{$data['count']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Number Of Employed Alumni Per Batch</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Batch Year</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumniEmployedData as $data)
                                    <tr>
                                        <th>{{$data['batch_year']}}</th>
                                        <td>{{$data['percentage']}}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>