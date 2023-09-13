@extends('layout.main')
@section('container')
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-2">
            <div class="card bg-warning text-white  h-100">
                <div class="card-body">
                    <h2>Total Pengguna</h2>
                    <h3>{{ $users->count() }}</h3>
                    <div class="table-responsive">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">Super Admin</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Clien</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $users->count() }}</th>
                                    <th>0</th>
                                    <th>0</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/" class="small text-white stretched-link"> Views Detail </a>
                    <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                </div> --}}
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-2">
            <div class="card bg-info text-white  h-100">
                <div class="card-body">
                    <h2>Total Daerah Irigasi</h2>
                    <h3>{{ $DaerahIrigasi->count() }}</h3>
                    <div class="table-responsive">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">Daerah Irigasi</th>
                                    <th scope="col">P3-TGAI</th>
                                    {{-- <th scope="col">Clien</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $DaerahIrigasi->unique('DaerahIrigasi')->count() }}</th>
                                    <th>{{ $DaerahIrigasi->unique('names')->count() }}</th>

                                    {{-- <th>{{ $users->where('role_id', '2')->count() }}</th>
                                    <th>{{ $users->where('role_id', '3')->count() }}</th> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="/users" class="small text-white stretched-link"> Views Detail </a>
                <div class="small text-white"><i class="fas fa-angel-right"></i></div>
            </div> --}}
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-2">
            <div class="card bg-danger text-white  h-100">
                <div class="card-body">
                    <h2>Total Panjang Irigasi</h2>
                    {{-- <h3>{{ $users->count() }}</h3> --}}
                    <div class="table-responsive">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">Terbangun</th>
                                    <th scope="col">Belum Terbangun</th>
                                    {{-- <th scope="col">Clien</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $IrigasiDesaTerbangun }} KM</th>
                                    <th>{{ $IrigasiDesaBelumTerbangun }} KM</th>
                                    {{-- <th>{{ $users->where('role_id', '3')->count() }}</th> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">


                    <div id="bar"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/10/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script type="text/javascript">
        var userData = @json($userData);
        Highcharts.chart('line', {

            title: {
                text: 'P3-TGAI',
                align: 'left'
            },

            // subtitle: {
            //     text: 'By Job Category. Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>.',
            //     align: 'left'
            // },

            yAxis: {
                title: {
                    text: 'Jumlah Daerah Irigasi'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2010 to 2030'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: true
                    },
                    pointStart: 1975
                }
            },

            series: [{
                name: 'Data 1',
                data: userData
            }, {
                name: 'Data 1',
                data: [11, 15, 13, 14, 15, 6, 17, 18, 9, 20]
            }, {
                name: 'Data 2',
                data: [15, 5, 17, 8, 19, 20, 25, 22, 12, 24, 28]
            }, {
                name: 'Data 3',
                data: [null, null, null, null, null, null, null,
                    null, 20, 21, 22, 23, 24, 25
                ]
            }, {
                name: 'Data 4',
                data: [6, 8, 9, 10, 11, 12, 13, 14, 15]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 1000
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
    <script type="text/javascript">
       var dataJSON = {!! $dataJSON !!};
        Highcharts.chart('bar', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Chart P3-TGAI'
            },
        
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -35,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Mendapatkan P3-TGAI'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Mendapatkan P3-TGAI: <b>{point.y:.1f} Kali</b>'
            },
            series: [{
                name: 'Population',
                colors: [
                    '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                    '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#03c69b', '#00f194'
                ],
                colorByPoint: true,
                groupPadding: 0,
                data: dataJSON,
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    </script>
    {{-- <script type="text/javascript">
        var dataJSON = {!! $dataJSON !!};

        Highcharts.chart('bar', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Chart P3-TGAI'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Mendapatkan P3-TGAI'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Jumlah: <b>{point.y}</b>'
            },
            
            series: [{
                name: 'Jumlah',
                colors: [
                    '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
                    '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
                    '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
                    '#03c69b', '#00f194'
                ],
                data: dataJSON,
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y}', // Display the exact value
                    y: 10, // Adjust the label position
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    </script> --}}
@endsection
