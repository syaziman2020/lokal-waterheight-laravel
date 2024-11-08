<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Lokal Waterheight</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('frontend/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>
<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
        border: none;
        position: relative;
        margin-bottom: 30px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
    }

    .l-bg-cherry {
        background: linear-gradient(to right, #493240, #f09) !important;
        color: #fff;
    }

    .l-bg-blue-dark {
        background: linear-gradient(to right, #373b44, #4286f4) !important;
        color: #fff;
    }

    .l-bg-green-dark {
        background: linear-gradient(to right, #0a504a, #38ef7d) !important;
        color: #fff;
    }

    .l-bg-orange-dark {
        background: linear-gradient(to right, #a86008, #ffba56) !important;
        color: #fff;
    }

    .card .card-statistic-3 .card-icon-large .fas,
    .card .card-statistic-3 .card-icon-large .far,
    .card .card-statistic-3 .card-icon-large .fab,
    .card .card-statistic-3 .card-icon-large .fal {
        font-size: 110px;
    }

    .card .card-statistic-3 .card-icon {
        text-align: center;
        line-height: 50px;
        margin-left: 15px;
        color: #000;
        position: absolute;
        right: -5px;
        top: 20px;
        opacity: 0.1;
    }

    .l-bg-cyan {
        background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
        color: #fff;
    }

    .l-bg-green {
        background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
        color: #fff;
    }

    .l-bg-orange {
        background: linear-gradient(to right, #f9900e, #ffba56) !important;
        color: #fff;
    }
</style>

<body>
    <!-- header top section start -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="call_text"><img src="{{ asset('frontend/images/cloud-computing.png') }}"
                            width="30"><span class="call_text_left">Lokal Waterheight</span></div>
                </div>
                <div class="col-sm-4">
                    <div class="call_text"><span class="call_text_left">Rekayasa Sistem Komputer</span></div>
                </div>
                <div class="col-sm-4">
                    <div class="call_text"><a href="#"><img src="{{ asset('frontend/images/untan-logo.png') }}"
                                width="30"><span class="call_text_left">Universitas Tanjungpura</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="clever_text" style="margin-left:30px">Pengukuran <span
                            style="color: #212122; ">Ketinggian</span>
                        Air Berbasis Internet of Things Menggunakan <span style="color: #212122; ">Websocket</span> dan
                        <span style="color: #212122; ">Lora</span>
                    </h1>

                </div>
                <div class="col-sm-6 padding_0">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
                        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

                    <div class="container">
                        <div class="col ">

                            <div class="col-xl-12 col-lg-6">
                                <div class="card l-bg-green-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                        <div class="mb-4">
                                            <h3 class="card-title mb-0" style="font-weight: 600;color:white">Slave
                                                Pertama</h3>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 id="sensorValue1" class="d-flex align-items-center mb-0"
                                                    style="font-weight: 600;color:white">
                                                    ... cm
                                                </h2>
                                            </div>

                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h3 id="rssiValue1" class="d-flex align-items-center mb-0"
                                                    style="font-weight: 600;color:white">
                                                    ... dBm
                                                </h3>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span>10% <i class="fa fa-arrow-up"></i></span>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i>
                                        </div>
                                        <div class="mb-4">
                                            <h3 class="card-title mb-0" style="font-weight: 600;color:white">Slave
                                                Kedua</h3>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 id="sensorValue2" class="d-flex align-items-center mb-0"
                                                    style="font-weight: 600;color:white">
                                                    ... cm
                                                </h2>
                                            </div>


                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h3 id="rssiValue2" class="d-flex align-items-center mb-0"
                                                    style="font-weight: 600;color:white">
                                                    ... dBm
                                                </h3>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">

            <div class="d-flex  justify-content-center">
                <h5 class="what_text">Websocket</h5>
            </div>
            <div class="d-flex  justify-content-center">
                <h1 class="services_text custom_main">Log Pengiriman</h1>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- services_2 section start -->
    <div class="services_section_2">
        <div class="container">
            <div class="table-responsive">
                <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row dt-row">
                        <div class="col-sm-12">
                            <table class="table dataTable no-footer" id="table1" aria-describedby="table1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="table1"
                                            rowspan="1" colspan="1" style="width: 250.8594px;">Nama</th>
                                        <th tabindex="0" colspan="1" style="width: 120.344px;">Data (cm)</th>
                                        <th tabindex="0" colspan="1" style="width: 120.719px;">RSSI (dBM)</th>
                                        <th tabindex="0" colspan="1" style="width: 120.719px;">Waktu</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sensors as $sensorData)
                                        <tr>
                                            <td>
                                                @if ($sensorData)
                                                    @if ($sensorData->slave == 'S1')
                                                        Slave 1
                                                    @else
                                                        Slave 2
                                                    @endif
                                                @endif
                                            </td>
                                            <td>{{ $sensorData->sensor ?? '-' }}</td>
                                            <td>{{ $sensorData->rssi ?? '-' }}</td>
                                            <td>{{ $sensorData->created_at->format('d M Y H:i:s') }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">
                                Showing {{ $sensors->firstItem() ?? 0 }} to {{ $sensors->lastItem() ?? 0 }} of
                                {{ $sensors->total() ?? 0 }}
                                entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
                                <ul class="pagination pagination-primary">
                                    <li class="paginate_button page-item {{ $sensors->onFirstPage() ? 'disabled' : '' }}"
                                        id="table1_previous">
                                        <a href="{{ $sensors->previousPageUrl() }}" aria-controls="table1"
                                            aria-disabled="{{ $sensors->onFirstPage() ? 'true' : 'false' }}"
                                            role="link" tabindex="{{ $sensors->onFirstPage() ? '-1' : '0' }}"
                                            class="page-link">Previous</a>
                                    </li>

                                    @foreach ($sensors->getUrlRange(1, $sensors->lastPage()) as $page => $url)
                                        <li
                                            class="paginate_button page-item {{ $page == $sensors->currentPage() ? 'active' : '' }}">
                                            <a href="{{ $url }}" aria-controls="table1" role="link"
                                                aria-current="{{ $page == $sensors->currentPage() ? 'page' : '' }}"
                                                tabindex="0" class="page-link">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <li class="paginate_button page-item {{ $sensors->hasMorePages() ? '' : 'disabled' }}"
                                        id="table1_next">
                                        <a href="{{ $sensors->nextPageUrl() }}" aria-controls="table1"
                                            aria-disabled="{{ $sensors->hasMorePages() ? 'false' : 'true' }}"
                                            role="link" tabindex="{{ $sensors->hasMorePages() ? '0' : '-1' }}"
                                            class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright">2023 All Rights Reserved. <a href="">Created by IT Team Resiskom</p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        function fetchSensorData() {
            fetch('/s1')
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    document.getElementById('sensorValue1').textContent = `${data.sensor.sensor ?? "..."} cm`;
                    document.getElementById('rssiValue1').textContent = `${data.sensor.rssi ?? "..."} dBm`;
                })
                .catch(error => console.error('Error:', error));
            fetch('/s2')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('sensorValue2').textContent = `${data.sensor.sensor ?? "..."} cm`;
                    document.getElementById('rssiValue2').textContent = `${data.sensor.rssi ?? "..."} dBm`;
                })
                .catch(error => console.error('Error:', error));
        }

        // Fetch data every 5 seconds
        setInterval(fetchSensorData, 5000);

        // Fetch data on page load
        fetchSensorData();
    </script>
</body>

</html>
