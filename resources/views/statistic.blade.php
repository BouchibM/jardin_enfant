@extends('layouts.sidebar')
@section('main')

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader animate__animated animate__fadeOut d-none">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <main class="main-content">
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div>
                <div class="content-inner pb-0 container-fluid" id="page_layout">
                    <div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">Nombre de nouvelle inscription</div>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <div>
                                                <h2 class="counter" style="visibility: visible;">50</h2>
                                                <!-- 26.84% -->
                                            </div>
                                            <!-- <div class="border  bg-danger-subtle rounded p-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                                </svg>
                                            </div> -->
                                        </div>
                                        <div class="mt-4">
                                            <div class="progress bg-danger-subtle shadow-none w-100"
                                                style="height: 6px">
                                                <div class="progress-bar bg-danger" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 50%; transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">Nombre de reinscription</div>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <div>
                                                <h2 class="counter" style="visibility: visible;">200</h2>

                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="progress bg-info-subtle shadow-none w-100" style="height: 6px">
                                                <div class="progress-bar bg-info" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 70%; transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">Nombre de desinscription</div>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <div>
                                                <h2 class="counter" style="visibility: visible;">3</h2>

                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="progress bg-success-subtle shadow-none w-100"
                                                style="height: 6px">
                                                <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 75%; transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">Nombre de transfert</div>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <div>
                                                <h2 class="counter" style="visibility: visible;">10</h2>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="progress bg-primary-subtle shadow-none w-100"
                                                style="height: 6px">
                                                <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 60%; transition: width 2s ease 0s;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-info-subtle">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-info-subtle rounded p-3">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                <h2 class="counter" style="visibility: visible;">60</h2>
                                                Employés
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-warning-subtle">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-warning-subtle rounded p-3">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                <h2 class="counter" style="visibility: visible;">25</h2>
                                                Utilisateurs
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-danger-subtle">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-danger-subtle rounded p-3">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.34933 14.8577C5.38553 14.8577 2 15.47 2 17.9173C2 20.3665 5.364 20.9999 9.34933 20.9999C13.3131 20.9999 16.6987 20.3876 16.6987 17.9403C16.6987 15.4911 13.3347 14.8577 9.34933 14.8577Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.34935 12.5248C12.049 12.5248 14.2124 10.4062 14.2124 7.76241C14.2124 5.11865 12.049 3 9.34935 3C6.65072 3 4.48633 5.11865 4.48633 7.76241C4.48633 10.4062 6.65072 12.5248 9.34935 12.5248Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M16.1733 7.84873C16.1733 9.19505 15.7604 10.4513 15.0363 11.4948C14.961 11.6021 15.0275 11.7468 15.1586 11.7698C15.3406 11.7995 15.5275 11.8177 15.7183 11.8216C17.6165 11.8704 19.3201 10.6736 19.7907 8.87116C20.4884 6.19674 18.4414 3.79541 15.8338 3.79541C15.551 3.79541 15.2799 3.82416 15.0157 3.87686C14.9795 3.88453 14.9404 3.90177 14.9208 3.93244C14.8954 3.97172 14.914 4.02251 14.9394 4.05605C15.7232 5.13214 16.1733 6.44205 16.1733 7.84873Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21.779 15.1693C21.4316 14.4439 20.593 13.9465 19.3171 13.7022C18.7153 13.5585 17.0852 13.3544 15.5695 13.3831C15.547 13.386 15.5343 13.4013 15.5324 13.4109C15.5294 13.4262 15.5363 13.4492 15.5656 13.4655C16.2662 13.8047 18.9737 15.2804 18.6332 18.3927C18.6185 18.5288 18.729 18.6438 18.867 18.6246C19.5333 18.5317 21.2476 18.1704 21.779 17.0474C22.0735 16.4533 22.0735 15.7634 21.779 15.1693Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                <h2 class="counter" style="visibility: visible;">1500</h2>
                                                Enfant
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-primary-subtle">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-primary-subtle rounded p-3">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                <h2 class="counter" style="visibility: visible;">1000</h2>
                                                Parent
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column">
                                            <div class="mb-3">
                                                <h2>Nombre de classe par Jardin</h2>
                                                <!-- <span class="text-primary">Status</span> -->
                                            </div>
                                            <div class="border rounded">
                                                <div id="extrachart" style="min-height: 250px;">
                                                    <div id="apexcharts8ygw76jv"
                                                        class="apexcharts-canvas apexcharts8ygw76jv apexcharts-theme-light"
                                                        style="width: 834px; height: 250px;">
                                                        <svg id="SvgjsSvg4508" width="834" height="250"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <foreignObject x="0" y="0" width="834" height="250">
                                                                <div class="apexcharts-legend"
                                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                                    style="max-height: 125px;"></div>
                                                            </foreignObject>
                                                            <g id="SvgjsG4578" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-18, 0)"></g>
                                                            <g id="SvgjsG4510"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 1)">
                                                                <defs id="SvgjsDefs4509">
                                                                    <linearGradient id="SvgjsLinearGradient4512" x1="0"
                                                                        y1="0" x2="0" y2="1">
                                                                        <stop id="SvgjsStop4513" stop-opacity="0.4"
                                                                            stop-color="rgba(216,227,240,0.4)"
                                                                            offset="0"></stop>
                                                                        <stop id="SvgjsStop4514" stop-opacity="0.5"
                                                                            stop-color="rgba(190,209,230,0.5)"
                                                                            offset="1"></stop>
                                                                        <stop id="SvgjsStop4515" stop-opacity="0.5"
                                                                            stop-color="rgba(190,209,230,0.5)"
                                                                            offset="1"></stop>
                                                                    </linearGradient>
                                                                    <clipPath id="gridRectMask8ygw76jv">
                                                                        <rect id="SvgjsRect4517" width="840"
                                                                            height="254" x="-3" y="-3" rx="0" ry="0"
                                                                            opacity="1" stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMask8ygw76jv"></clipPath>
                                                                    <clipPath id="nonForecastMask8ygw76jv"></clipPath>
                                                                    <clipPath id="gridRectMarkerMask8ygw76jv">
                                                                        <rect id="SvgjsRect4518" width="838"
                                                                            height="252" x="-2" y="-2" rx="0" ry="0"
                                                                            opacity="1" stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <rect id="SvgjsRect4516" width="25.483333333333334"
                                                                    height="248" x="0" y="0" rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke-dasharray="3"
                                                                    fill="url(#SvgjsLinearGradient4512)"
                                                                    class="apexcharts-xcrosshairs" y2="248"
                                                                    filter="none" fill-opacity="0.9"></rect>
                                                                <g id="SvgjsG4552" class="apexcharts-grid">
                                                                    <g id="SvgjsG4553"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine4556" x1="0" y1="0" x2="834"
                                                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                            stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4557" x1="0"
                                                                            y1="41.333333333333336" x2="834"
                                                                            y2="41.333333333333336" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4558" x1="0"
                                                                            y1="82.66666666666667" x2="834"
                                                                            y2="82.66666666666667" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4559" x1="0" y1="124"
                                                                            x2="834" y2="124" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4560" x1="0"
                                                                            y1="165.33333333333334" x2="834"
                                                                            y2="165.33333333333334" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4561" x1="0"
                                                                            y1="206.66666666666669" x2="834"
                                                                            y2="206.66666666666669" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4562" x1="0"
                                                                            y1="248.00000000000003" x2="834"
                                                                            y2="248.00000000000003" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG4554"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none;"></g>
                                                                    <line id="SvgjsLine4564" x1="0" y1="248" x2="834"
                                                                        y2="248" stroke="transparent"
                                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                                    </line>
                                                                    <line id="SvgjsLine4563" x1="0" y1="1" x2="0"
                                                                        y2="248" stroke="transparent"
                                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                                    </line>
                                                                </g>
                                                                <g id="SvgjsG4555" class="apexcharts-grid-borders"
                                                                    style="display: none;"></g>
                                                                <g id="SvgjsG4519"
                                                                    class="apexcharts-bar-series apexcharts-plot-series">
                                                                    <g id="SvgjsG4520" class="apexcharts-series" rel="1"
                                                                        seriesName="NetxProfit" data:realIndex="0">
                                                                        <path id="SvgjsPath4525"
                                                                            d="M 20.85 243.001 L 20.85 162.06766666666667 C 20.85 159.56766666666667 23.35 157.06766666666667 25.85 157.06766666666667 L 39.333333333333336 157.06766666666667 C 41.833333333333336 157.06766666666667 44.333333333333336 159.56766666666667 44.333333333333336 162.06766666666667 L 44.333333333333336 243.001 C 44.333333333333336 245.501 41.833333333333336 248.001 39.333333333333336 248.001 L 25.85 248.001 C 23.35 248.001 20.85 245.501 20.85 243.001 Z "
                                                                            fill="rgba(234,106,18,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 20.85 243.001 L 20.85 162.06766666666667 C 20.85 159.56766666666667 23.35 157.06766666666667 25.85 157.06766666666667 L 39.333333333333336 157.06766666666667 C 41.833333333333336 157.06766666666667 44.333333333333336 159.56766666666667 44.333333333333336 162.06766666666667 L 44.333333333333336 243.001 C 44.333333333333336 245.501 41.833333333333336 248.001 39.333333333333336 248.001 L 25.85 248.001 C 23.35 248.001 20.85 245.501 20.85 243.001 Z "
                                                                            pathFrom="M 20.85 248.001 L 20.85 248.001 L 44.333333333333336 248.001 L 44.333333333333336 248.001 L 44.333333333333336 248.001 L 44.333333333333336 248.001 L 44.333333333333336 248.001 L 20.85 248.001 Z"
                                                                            cy="157.06666666666666"
                                                                            cx="112.51666666666668" j="0" val="44"
                                                                            barHeight="90.93333333333334"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4527"
                                                                            d="M 113.51666666666668 243.001 L 113.51666666666668 139.33433333333335 C 113.51666666666668 136.83433333333335 116.01666666666668 134.33433333333335 118.51666666666668 134.33433333333335 L 132 134.33433333333335 C 134.5 134.33433333333335 137 136.83433333333335 137 139.33433333333335 L 137 243.001 C 137 245.501 134.5 248.001 132 248.001 L 118.51666666666668 248.001 C 116.01666666666668 248.001 113.51666666666668 245.501 113.51666666666668 243.001 Z "
                                                                            fill="rgba(234,106,18,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 113.51666666666668 243.001 L 113.51666666666668 139.33433333333335 C 113.51666666666668 136.83433333333335 116.01666666666668 134.33433333333335 118.51666666666668 134.33433333333335 L 132 134.33433333333335 C 134.5 134.33433333333335 137 136.83433333333335 137 139.33433333333335 L 137 243.001 C 137 245.501 134.5 248.001 132 248.001 L 118.51666666666668 248.001 C 116.01666666666668 248.001 113.51666666666668 245.501 113.51666666666668 243.001 Z "
                                                                            pathFrom="M 113.51666666666668 248.001 L 113.51666666666668 248.001 L 137 248.001 L 137 248.001 L 137 248.001 L 137 248.001 L 137 248.001 L 113.51666666666668 248.001 Z"
                                                                            cy="134.33333333333334"
                                                                            cx="205.18333333333334" j="1" val="55"
                                                                            barHeight="113.66666666666666"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4529"
                                                                            d="M 206.18333333333334 243.001 L 206.18333333333334 135.201 C 206.18333333333334 132.701 208.68333333333334 130.201 211.18333333333334 130.201 L 224.66666666666669 130.201 C 227.16666666666669 130.201 229.66666666666669 132.701 229.66666666666669 135.201 L 229.66666666666669 243.001 C 229.66666666666669 245.501 227.16666666666669 248.001 224.66666666666669 248.001 L 211.18333333333334 248.001 C 208.68333333333334 248.001 206.18333333333334 245.501 206.18333333333334 243.001 Z "
                                                                            fill="rgba(234,106,18,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 206.18333333333334 243.001 L 206.18333333333334 135.201 C 206.18333333333334 132.701 208.68333333333334 130.201 211.18333333333334 130.201 L 224.66666666666669 130.201 C 227.16666666666669 130.201 229.66666666666669 132.701 229.66666666666669 135.201 L 229.66666666666669 243.001 C 229.66666666666669 245.501 227.16666666666669 248.001 224.66666666666669 248.001 L 211.18333333333334 248.001 C 208.68333333333334 248.001 206.18333333333334 245.501 206.18333333333334 243.001 Z "
                                                                            pathFrom="M 206.18333333333334 248.001 L 206.18333333333334 248.001 L 229.66666666666669 248.001 L 229.66666666666669 248.001 L 229.66666666666669 248.001 L 229.66666666666669 248.001 L 229.66666666666669 248.001 L 206.18333333333334 248.001 Z"
                                                                            cy="130.2" cx="297.85" j="2" val="57"
                                                                            barHeight="117.8"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4531"
                                                                            d="M 298.85 243.001 L 298.85 137.26766666666666 C 298.85 134.76766666666666 301.35 132.26766666666666 303.85 132.26766666666666 L 317.33333333333337 132.26766666666666 C 319.83333333333337 132.26766666666666 322.33333333333337 134.76766666666666 322.33333333333337 137.26766666666666 L 322.33333333333337 243.001 C 322.33333333333337 245.501 319.83333333333337 248.001 317.33333333333337 248.001 L 303.85 248.001 C 301.35 248.001 298.85 245.501 298.85 243.001 Z "
                                                                            fill="rgba(234,106,18,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 298.85 243.001 L 298.85 137.26766666666666 C 298.85 134.76766666666666 301.35 132.26766666666666 303.85 132.26766666666666 L 317.33333333333337 132.26766666666666 C 319.83333333333337 132.26766666666666 322.33333333333337 134.76766666666666 322.33333333333337 137.26766666666666 L 322.33333333333337 243.001 C 322.33333333333337 245.501 319.83333333333337 248.001 317.33333333333337 248.001 L 303.85 248.001 C 301.35 248.001 298.85 245.501 298.85 243.001 Z "
                                                                            pathFrom="M 298.85 248.001 L 298.85 248.001 L 322.33333333333337 248.001 L 322.33333333333337 248.001 L 322.33333333333337 248.001 L 322.33333333333337 248.001 L 322.33333333333337 248.001 L 298.85 248.001 Z"
                                                                            cy="132.26666666666665"
                                                                            cx="390.5166666666667" j="3" val="56"
                                                                            barHeight="115.73333333333333"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4533"
                                                                            d="M 391.5166666666667 243.001 L 391.5166666666667 126.93433333333334 C 391.5166666666667 124.43433333333334 394.0166666666667 121.93433333333334 396.5166666666667 121.93433333333334 L 410.00000000000006 121.93433333333334 C 412.50000000000006 121.93433333333334 415.00000000000006 124.43433333333334 415.00000000000006 126.93433333333334 L 415.00000000000006 243.001 C 415.00000000000006 245.501 412.50000000000006 248.001 410.00000000000006 248.001 L 396.5166666666667 248.001 C 394.0166666666667 248.001 391.5166666666667 245.501 391.5166666666667 243.001 Z "
                                                                            fill="rgba(234,106,18,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 391.5166666666667 243.001 L 391.5166666666667 126.93433333333334 C 391.5166666666667 124.43433333333334 394.0166666666667 121.93433333333334 396.5166666666667 121.93433333333334 L 410.00000000000006 121.93433333333334 C 412.50000000000006 121.93433333333334 415.00000000000006 124.43433333333334 415.00000000000006 126.93433333333334 L 415.00000000000006 243.001 C 415.00000000000006 245.501 412.50000000000006 248.001 410.00000000000006 248.001 L 396.5166666666667 248.001 C 394.0166666666667 248.001 391.5166666666667 245.501 391.5166666666667 243.001 Z "
                                                                            pathFrom="M 391.5166666666667 248.001 L 391.5166666666667 248.001 L 415.00000000000006 248.001 L 415.00000000000006 248.001 L 415.00000000000006 248.001 L 415.00000000000006 248.001 L 415.00000000000006 248.001 L 391.5166666666667 248.001 Z"
                                                                            cy="121.93333333333334"
                                                                            cx="483.1833333333334" j="4" val="61"
                                                                            barHeight="126.06666666666666"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4535"
                                                                            d="M 484.1833333333334 243.001 L 484.1833333333334 133.13433333333333 C 484.1833333333334 130.63433333333333 486.6833333333334 128.13433333333333 489.1833333333334 128.13433333333333 L 502.66666666666674 128.13433333333333 C 505.16666666666674 128.13433333333333 507.66666666666674 130.63433333333333 507.66666666666674 133.13433333333333 L 507.66666666666674 243.001 C 507.66666666666674 245.501 505.16666666666674 248.001 502.66666666666674 248.001 L 489.1833333333334 248.001 C 486.6833333333334 248.001 484.1833333333334 245.501 484.1833333333334 243.001 Z "
                                                                            fill="rgba(234,106,18,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="0"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 484.1833333333334 243.001 L 484.1833333333334 133.13433333333333 C 484.1833333333334 130.63433333333333 486.6833333333334 128.13433333333333 489.1833333333334 128.13433333333333 L 502.66666666666674 128.13433333333333 C 505.16666666666674 128.13433333333333 507.66666666666674 130.63433333333333 507.66666666666674 133.13433333333333 L 507.66666666666674 243.001 C 507.66666666666674 245.501 505.16666666666674 248.001 502.66666666666674 248.001 L 489.1833333333334 248.001 C 486.6833333333334 248.001 484.1833333333334 245.501 484.1833333333334 243.001 Z "
                                                                            pathFrom="M 484.1833333333334 248.001 L 484.1833333333334 248.001 L 507.66666666666674 248.001 L 507.66666666666674 248.001 L 507.66666666666674 248.001 L 507.66666666666674 248.001 L 507.66666666666674 248.001 L 484.1833333333334 248.001 Z"
                                                                            cy="128.13333333333333" cx="575.85" j="5"
                                                                            val="58" barHeight="119.86666666666666"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <g id="SvgjsG4522"
                                                                            class="apexcharts-bar-goals-markers">
                                                                            <g id="SvgjsG4524"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4526"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4528"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4530"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4532"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4534"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG4523"
                                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG4536" class="apexcharts-series" rel="2"
                                                                        seriesName="Revenue" data:realIndex="1">
                                                                        <path id="SvgjsPath4541"
                                                                            d="M 46.333333333333336 243.001 L 46.333333333333336 95.93433333333334 C 46.333333333333336 93.43433333333334 48.833333333333336 90.93433333333334 51.333333333333336 90.93433333333334 L 64.81666666666666 90.93433333333334 C 67.31666666666666 90.93433333333334 69.81666666666666 93.43433333333334 69.81666666666666 95.93433333333334 L 69.81666666666666 243.001 C 69.81666666666666 245.501 67.31666666666666 248.001 64.81666666666666 248.001 L 51.333333333333336 248.001 C 48.833333333333336 248.001 46.333333333333336 245.501 46.333333333333336 243.001 Z "
                                                                            fill="rgba(100,16,241,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="1"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 46.333333333333336 243.001 L 46.333333333333336 95.93433333333334 C 46.333333333333336 93.43433333333334 48.833333333333336 90.93433333333334 51.333333333333336 90.93433333333334 L 64.81666666666666 90.93433333333334 C 67.31666666666666 90.93433333333334 69.81666666666666 93.43433333333334 69.81666666666666 95.93433333333334 L 69.81666666666666 243.001 C 69.81666666666666 245.501 67.31666666666666 248.001 64.81666666666666 248.001 L 51.333333333333336 248.001 C 48.833333333333336 248.001 46.333333333333336 245.501 46.333333333333336 243.001 Z "
                                                                            pathFrom="M 46.333333333333336 248.001 L 46.333333333333336 248.001 L 69.81666666666666 248.001 L 69.81666666666666 248.001 L 69.81666666666666 248.001 L 69.81666666666666 248.001 L 69.81666666666666 248.001 L 46.333333333333336 248.001 Z"
                                                                            cy="90.93333333333334" cx="138" j="0"
                                                                            val="76" barHeight="157.06666666666666"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4543"
                                                                            d="M 139 243.001 L 139 77.33433333333335 C 139 74.83433333333335 141.5 72.33433333333335 144 72.33433333333335 L 157.48333333333335 72.33433333333335 C 159.98333333333335 72.33433333333335 162.48333333333335 74.83433333333335 162.48333333333335 77.33433333333335 L 162.48333333333335 243.001 C 162.48333333333335 245.501 159.98333333333335 248.001 157.48333333333335 248.001 L 144 248.001 C 141.5 248.001 139 245.501 139 243.001 Z "
                                                                            fill="rgba(100,16,241,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="1"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 139 243.001 L 139 77.33433333333335 C 139 74.83433333333335 141.5 72.33433333333335 144 72.33433333333335 L 157.48333333333335 72.33433333333335 C 159.98333333333335 72.33433333333335 162.48333333333335 74.83433333333335 162.48333333333335 77.33433333333335 L 162.48333333333335 243.001 C 162.48333333333335 245.501 159.98333333333335 248.001 157.48333333333335 248.001 L 144 248.001 C 141.5 248.001 139 245.501 139 243.001 Z "
                                                                            pathFrom="M 139 248.001 L 139 248.001 L 162.48333333333335 248.001 L 162.48333333333335 248.001 L 162.48333333333335 248.001 L 162.48333333333335 248.001 L 162.48333333333335 248.001 L 139 248.001 Z"
                                                                            cy="72.33333333333334"
                                                                            cx="230.66666666666669" j="1" val="85"
                                                                            barHeight="175.66666666666666"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4545"
                                                                            d="M 231.66666666666669 243.001 L 231.66666666666669 44.26766666666668 C 231.66666666666669 41.76766666666668 234.16666666666669 39.26766666666668 236.66666666666669 39.26766666666668 L 250.15000000000003 39.26766666666668 C 252.65000000000003 39.26766666666668 255.15000000000003 41.76766666666668 255.15000000000003 44.26766666666668 L 255.15000000000003 243.001 C 255.15000000000003 245.501 252.65000000000003 248.001 250.15000000000003 248.001 L 236.66666666666669 248.001 C 234.16666666666669 248.001 231.66666666666669 245.501 231.66666666666669 243.001 Z "
                                                                            fill="rgba(100,16,241,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="1"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 231.66666666666669 243.001 L 231.66666666666669 44.26766666666668 C 231.66666666666669 41.76766666666668 234.16666666666669 39.26766666666668 236.66666666666669 39.26766666666668 L 250.15000000000003 39.26766666666668 C 252.65000000000003 39.26766666666668 255.15000000000003 41.76766666666668 255.15000000000003 44.26766666666668 L 255.15000000000003 243.001 C 255.15000000000003 245.501 252.65000000000003 248.001 250.15000000000003 248.001 L 236.66666666666669 248.001 C 234.16666666666669 248.001 231.66666666666669 245.501 231.66666666666669 243.001 Z "
                                                                            pathFrom="M 231.66666666666669 248.001 L 231.66666666666669 248.001 L 255.15000000000003 248.001 L 255.15000000000003 248.001 L 255.15000000000003 248.001 L 255.15000000000003 248.001 L 255.15000000000003 248.001 L 231.66666666666669 248.001 Z"
                                                                            cy="39.26666666666668"
                                                                            cx="323.33333333333337" j="2" val="101"
                                                                            barHeight="208.73333333333332"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4547"
                                                                            d="M 324.33333333333337 243.001 L 324.33333333333337 50.467666666666666 C 324.33333333333337 47.967666666666666 326.83333333333337 45.467666666666666 329.33333333333337 45.467666666666666 L 342.8166666666667 45.467666666666666 C 345.3166666666667 45.467666666666666 347.8166666666667 47.967666666666666 347.8166666666667 50.467666666666666 L 347.8166666666667 243.001 C 347.8166666666667 245.501 345.3166666666667 248.001 342.8166666666667 248.001 L 329.33333333333337 248.001 C 326.83333333333337 248.001 324.33333333333337 245.501 324.33333333333337 243.001 Z "
                                                                            fill="rgba(100,16,241,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="1"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 324.33333333333337 243.001 L 324.33333333333337 50.467666666666666 C 324.33333333333337 47.967666666666666 326.83333333333337 45.467666666666666 329.33333333333337 45.467666666666666 L 342.8166666666667 45.467666666666666 C 345.3166666666667 45.467666666666666 347.8166666666667 47.967666666666666 347.8166666666667 50.467666666666666 L 347.8166666666667 243.001 C 347.8166666666667 245.501 345.3166666666667 248.001 342.8166666666667 248.001 L 329.33333333333337 248.001 C 326.83333333333337 248.001 324.33333333333337 245.501 324.33333333333337 243.001 Z "
                                                                            pathFrom="M 324.33333333333337 248.001 L 324.33333333333337 248.001 L 347.8166666666667 248.001 L 347.8166666666667 248.001 L 347.8166666666667 248.001 L 347.8166666666667 248.001 L 347.8166666666667 248.001 L 324.33333333333337 248.001 Z"
                                                                            cy="45.46666666666667"
                                                                            cx="416.00000000000006" j="3" val="98"
                                                                            barHeight="202.53333333333333"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4549"
                                                                            d="M 417.00000000000006 243.001 L 417.00000000000006 73.20100000000002 C 417.00000000000006 70.70100000000002 419.50000000000006 68.20100000000002 422.00000000000006 68.20100000000002 L 435.4833333333334 68.20100000000002 C 437.9833333333334 68.20100000000002 440.4833333333334 70.70100000000002 440.4833333333334 73.20100000000002 L 440.4833333333334 243.001 C 440.4833333333334 245.501 437.9833333333334 248.001 435.4833333333334 248.001 L 422.00000000000006 248.001 C 419.50000000000006 248.001 417.00000000000006 245.501 417.00000000000006 243.001 Z "
                                                                            fill="rgba(100,16,241,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="1"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 417.00000000000006 243.001 L 417.00000000000006 73.20100000000002 C 417.00000000000006 70.70100000000002 419.50000000000006 68.20100000000002 422.00000000000006 68.20100000000002 L 435.4833333333334 68.20100000000002 C 437.9833333333334 68.20100000000002 440.4833333333334 70.70100000000002 440.4833333333334 73.20100000000002 L 440.4833333333334 243.001 C 440.4833333333334 245.501 437.9833333333334 248.001 435.4833333333334 248.001 L 422.00000000000006 248.001 C 419.50000000000006 248.001 417.00000000000006 245.501 417.00000000000006 243.001 Z "
                                                                            pathFrom="M 417.00000000000006 248.001 L 417.00000000000006 248.001 L 440.4833333333334 248.001 L 440.4833333333334 248.001 L 440.4833333333334 248.001 L 440.4833333333334 248.001 L 440.4833333333334 248.001 L 417.00000000000006 248.001 Z"
                                                                            cy="68.20000000000002"
                                                                            cx="508.66666666666674" j="4" val="87"
                                                                            barHeight="179.79999999999998"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <path id="SvgjsPath4551"
                                                                            d="M 509.66666666666674 243.001 L 509.66666666666674 36.001000000000005 C 509.66666666666674 33.501000000000005 512.1666666666667 31.001 514.6666666666667 31.001 L 528.1500000000001 31.001 C 530.6500000000001 31.001 533.1500000000001 33.501000000000005 533.1500000000001 36.001000000000005 L 533.1500000000001 243.001 C 533.1500000000001 245.501 530.6500000000001 248.001 528.1500000000001 248.001 L 514.6666666666667 248.001 C 512.1666666666667 248.001 509.66666666666674 245.501 509.66666666666674 243.001 Z "
                                                                            fill="rgba(100,16,241,1)" fill-opacity="1"
                                                                            stroke="transparent" stroke-opacity="1"
                                                                            stroke-linecap="round" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-bar-area" index="1"
                                                                            clip-path="url(#gridRectMask8ygw76jv)"
                                                                            pathTo="M 509.66666666666674 243.001 L 509.66666666666674 36.001000000000005 C 509.66666666666674 33.501000000000005 512.1666666666667 31.001 514.6666666666667 31.001 L 528.1500000000001 31.001 C 530.6500000000001 31.001 533.1500000000001 33.501000000000005 533.1500000000001 36.001000000000005 L 533.1500000000001 243.001 C 533.1500000000001 245.501 530.6500000000001 248.001 528.1500000000001 248.001 L 514.6666666666667 248.001 C 512.1666666666667 248.001 509.66666666666674 245.501 509.66666666666674 243.001 Z "
                                                                            pathFrom="M 509.66666666666674 248.001 L 509.66666666666674 248.001 L 533.1500000000001 248.001 L 533.1500000000001 248.001 L 533.1500000000001 248.001 L 533.1500000000001 248.001 L 533.1500000000001 248.001 L 509.66666666666674 248.001 Z"
                                                                            cy="31" cx="601.3333333333334" j="5"
                                                                            val="105" barHeight="217"
                                                                            barWidth="25.483333333333334"></path>
                                                                        <g id="SvgjsG4538"
                                                                            class="apexcharts-bar-goals-markers">
                                                                            <g id="SvgjsG4540"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4542"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4544"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4546"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4548"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                            <g id="SvgjsG4550"
                                                                                className="apexcharts-bar-goals-groups"
                                                                                class="apexcharts-hidden-element-shown"
                                                                                clip-path="url(#gridRectMarkerMask8ygw76jv)">
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG4539"
                                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG4521"
                                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                                        data:realIndex="0"></g>
                                                                    <g id="SvgjsG4537"
                                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                                        data:realIndex="1"></g>
                                                                </g>
                                                                <line id="SvgjsLine4565" x1="0" y1="0" x2="834" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine4566" x1="0" y1="0" x2="834" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG4567" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG4568" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG4579" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG4580" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG4581" class="apexcharts-point-annotations">
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(0, 143, 251);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 2;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(0, 227, 150);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
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
                </div>
            </div>
        </div>

    </main>

    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true"
        data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="d-flex align-items-center">
                <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body data-scrollbar">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="mb-3">Scheme</h5>
                    <div class="d-grid gap-3 grid-cols-3 mb-4">
                        <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z"></path>
                            </svg>
                            <span class="ms-2 "> Auto </span>
                        </div>

                        <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z">
                                </path>
                            </svg>
                            <span class="ms-2 "> Dark </span>
                        </div>
                        <div class="btn btn-border active" data-setting="color-mode" data-name="color"
                            data-value="light">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z">
                                </path>
                            </svg>
                            <span class="ms-2 "> Light</span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mt-4 mb-3">Color Customizer</h5>
                        <button class="btn btn-transparent p-0 border-0" data-value="theme-color-default"
                            data-info="#079aa2" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Default" data-original-title="">
                            <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                    fill="#31BAF1"></path>
                                <path
                                    d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                    fill="#0169CA"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="grid-cols-5 mb-4 d-grid gap-x-2">
                        <div class="btn btn-border bg-transparent" data-value="theme-color-blue" data-info="#573BFF"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-1" data-original-title="">
                            <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32">
                                <circle cx="12" cy="12" r="10" fill="#00C3F9"></circle>
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF"></path>
                            </svg>
                        </div>
                        <div class="btn btn-border bg-transparent" data-value="theme-color-gray" data-info="#FD8D00"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-2" data-original-title="">
                            <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32">
                                <circle cx="12" cy="12" r="10" fill="#91969E"></circle>
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00"></path>
                            </svg>
                        </div>
                        <div class="btn btn-border bg-transparent" data-value="theme-color-red" data-info="#366AF0"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-3" data-original-title="">
                            <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32">
                                <circle cx="12" cy="12" r="10" fill="#DB5363"></circle>
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0"></path>
                            </svg>
                        </div>
                        <div class="btn btn-border bg-transparent" data-value="theme-color-yellow" data-info="#6410F1"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-4" data-original-title="">
                            <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32">
                                <circle cx="12" cy="12" r="10" fill="#EA6A12"></circle>
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1"></path>
                            </svg>
                        </div>
                        <div class="btn btn-border bg-transparent" data-value="theme-color-pink" data-info="#25C799"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-5" data-original-title="">
                            <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32">
                                <circle cx="12" cy="12" r="10" fill="#E586B3"></circle>
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799"></path>
                            </svg>
                        </div>

                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mb-3 mt-4">Scheme Direction</h5>
                    <div class="d-grid gap-3 grid-cols-2 mb-4">
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/01.png" alt="ltr"
                                class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2"
                                data-setting="dir-mode" data-name="dir" data-value="ltr">
                            <img src="../../assets/images/settings/light/01.png" alt="ltr"
                                class="mode light-img img-fluid btn-border p-0 flex-column active mb-2"
                                data-setting="dir-mode" data-name="dir" data-value="ltr">
                            <span class=" mt-2"> LTR </span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/02.png" alt=""
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode"
                                data-name="dir" data-value="rtl">
                            <img src="../../assets/images/settings/light/02.png" alt=""
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode"
                                data-name="dir" data-value="rtl">
                            <span class="mt-2 "> RTL </span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Sidebar Color</h5>
                    <div class="d-grid gap-3 grid-cols-2 mb-4">
                        <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-white">
                            <span class=""> Default </span>
                        </div>
                        <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-dark">
                            <span class=""> Dark </span>
                        </div>
                        <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-color">
                            <span class=""> Color </span>
                        </div>

                        <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-transparent">
                            <span class=""> Transparent </span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Sidebar Types</h5>
                    <div class="d-grid gap-3 grid-cols-3 mb-4">
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/03.png" alt="mini"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-mini">
                            <img src="../../assets/images/settings/light/03.png" alt="mini"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-mini">
                            <span class="mt-2">Mini</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/04.png" alt="hover"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                            <img src="../../assets/images/settings/light/04.png" alt="hover"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                            <span class="mt-2">Hover</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/05.png" alt="boxed"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-boxed">
                            <img src="../../assets/images/settings/light/05.png" alt="boxed"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-boxed">
                            <span class="mt-2">Boxed</span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
                    <div class="d-grid gap-3 grid-cols-2 mb-4">
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/06.png" alt="rounded-one-side"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-rounded">
                            <img src="../../assets/images/settings/light/06.png" alt="rounded-one-side"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-rounded">
                            <span class="mt-2">Rounded One Side</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/07.png" alt="rounded-all"
                                class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2"
                                data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                            <img src="../../assets/images/settings/light/07.png" alt="rounded-all"
                                class="mode light-img img-fluid btn-border p-0 flex-column active mb-2"
                                data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                            <span class="mt-2">Rounded All</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/08.png" alt="pill-one-side"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill">
                            <img src="../../assets/images/settings/light/09.png" alt="pill-one-side"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill">
                            <span class="mt-2">Pill One Side</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/09.png" alt="pill-all"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill-all">
                            <img src="../../assets/images/settings/light/08.png" alt="pill-all"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill-all">
                            <span class="mt-2">Pill All</span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Navbar Style</h5>
                    <div class="d-grid gap-3 grid-cols-2 ">
                        <div class=" text-center">
                            <img src="../../assets/images/settings/dark/11.png" alt="image"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                            <img src="../../assets/images/settings/light/10.png" alt="image"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                            <span class="mt-2">Glass</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/10.png" alt="color"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                            <img src="../../assets/images/settings/light/11.png" alt="color"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                            <span class="mt-2">Color</span>
                        </div>
                        <div class=" text-center">
                            <img src="../../assets/images/settings/dark/12.png" alt="sticky"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                            <img src="../../assets/images/settings/light/12.png" alt="sticky"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                            <span class="mt-2">Sticky</span>
                        </div>
                        <div class="text-center">
                            <img src="../../assets/images/settings/dark/13.png" alt="transparent"
                                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                            <img src="../../assets/images/settings/light/13.png" alt="transparent"
                                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                            <span class="mt-2">Transparent</span>
                        </div>
                        <div class="btn btn-border active col-span-full mt-4 d-block" data-setting="navbar"
                            data-name="navbar-default" data-value="default">
                            <span class=""> Default Navbar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Bundle Script -->
    <script src="../../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../../assets/js/charts/vectore-chart.js"></script>
    <script src="../../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="http://127.0.0.1:8000/assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="http://127.0.0.1:8000/assets/js/hope-ui.js" defer=""></script>
    <!-- region js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>
@endsection