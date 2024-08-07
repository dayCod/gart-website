@extends('admin.layouts.master')
@section('title', 'Dashboard')

@section('content')

    <div class="row" style="row-gap: 15px;">
        <div class="col-sm-6 col-md-3">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Category</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">{{ $totalCategories }}</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-user-pin bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-3">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Gallery</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">{{ $totalGalleries }}</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-group bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-3">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Pictures</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">{{ $totalPictures }}</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-map-pin bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-3">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Services</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">{{ $totalServices }}</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-trip bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-4">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Total Daily Visitor</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">200</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-book-bookmark bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-4">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Total Customer Message</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">123</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-question-mark bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Total Whatsapp Click</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">1000</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bxl-whatsapp bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Statistic of Gart Studio Website
                    </h5>
                </div>
                <div class="card-body">
                    <div id="lineChart"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        var options = {
            series: [{
                name: 'Daily Visitor',
                type: 'column',
                data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
            }, {
                name: 'Daily Customer Message',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
            }, {
                name: 'Daily Whatsapp Click',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
            }],
            chart: {
                height: 450,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            stroke: {
                width: [0, 4, 4]
            },
            dataLabels: {
                enabled: true,
                enabledOnSeries: []
            },
            labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001',
                '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'
            ],
            yaxis: [{
                title: {
                    text: '',
                },

            }, {
                opposite: true,
                title: {
                    text: ''
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#lineChart"), options);
        chart.render();
    </script>
@endpush
