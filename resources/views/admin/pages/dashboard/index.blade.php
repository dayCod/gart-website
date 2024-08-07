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
                                <i class="bx bx-book-bookmark bx-sm"></i>
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
                                <i class="bx bx-image-alt bx-sm"></i>
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
                                <i class="bx bx-image-alt bx-sm"></i>
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
                                <i class="bx bx-box bx-sm"></i>
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
                                <h4 class="card-title mb-0 me-2">{{ $totalDailyVisitors }}</h4>
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

        <div class="col-sm-6 col-md-4">
            <a href="#" class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-info">
                            <p class="card-text mb-2">Total Daily Customer Message</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">{{ $totalDailyCustomerMessages }}</h4>
                            </div>
                        </div>
                        <div class="card-icon align-self-center">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-message-dots bx-sm"></i>
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
                            <p class="card-text mb-2">Total Daily Whatsapp Click</p>
                            <div class="d-flex align-items-end mb-2">
                                <h4 class="card-title mb-0 me-2">{{ $totalDailyWhatsappClicks }}</h4>
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
                        Daily Growth Statistic of Gart Studio Website
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
        const dailyVisitorData = JSON.parse('{!! json_encode($setDailyVisitors) !!}')
        const dailyCustomerMessageData = JSON.parse('{!! json_encode($setDailyCustomerMessages) !!}')
        const dailyWhatsappClickData = JSON.parse('{!! json_encode($setDailyWhatsappClicks) !!}')

        var options = {
            series: [{
                name: 'Daily Visitor',
                type: 'column',
                data: dailyVisitorData.map(row => row.count)
            }, {
                name: 'Daily Customer Message',
                type: 'line',
                data: dailyCustomerMessageData.map(row => row.count)
            }, {
                name: 'Daily Whatsapp Click',
                type: 'line',
                data: dailyWhatsappClickData.map(row => row.count)
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
            labels: dailyVisitorData.map(row => row.day),
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
