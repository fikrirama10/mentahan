@extends('main')

@section('content')
    <div class="row">

        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Earning Reports</h5>
                        <small class="text-muted">Weekly Earnings Overview</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                            <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                                <h1 class="mb-0">$468</h1>
                                <div class="badge rounded bg-label-success">+4.2%</div>
                            </div>
                            <small class="text-muted">You informed of this week compared to last week</small>
                        </div>
                        <div class="col-12 col-md-8" style="position: relative;">
                            <div id="weeklyEarningReports" style="min-height: 202px;">
                                <div id="apexchartsk3g87fivj"
                                    class="apexcharts-canvas apexchartsk3g87fivj apexcharts-theme-light"
                                    style="width: 416px; height: 202px;"><svg id="SvgjsSvg1256" width="416"
                                        height="202" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1258" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1257">
                                                <linearGradient id="SvgjsLinearGradient1261" x1="0" y1="0"
                                                    x2="0" y2="1">
                                                    <stop id="SvgjsStop1262" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1263" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1264" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskk3g87fivj">
                                                    <rect id="SvgjsRect1266" width="430" height="163.70079907417298"
                                                        x="-2" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskk3g87fivj"></clipPath>
                                                <clipPath id="nonForecastMaskk3g87fivj"></clipPath>
                                                <clipPath id="gridRectMarkerMaskk3g87fivj">
                                                    <rect id="SvgjsRect1267" width="430" height="167.70079907417298"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1265" width="0" height="163.70079907417298"
                                                x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1261)" class="apexcharts-xcrosshairs"
                                                y2="163.70079907417298" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1286" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1287" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1289"
                                                        font-family="Public Sans" x="30.428571428571427"
                                                        y="192.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1290">Mo</tspan>
                                                        <title>Mo</title>
                                                    </text><text id="SvgjsText1292" font-family="Public Sans"
                                                        x="91.28571428571428" y="192.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1293">Tu</tspan>
                                                        <title>Tu</title>
                                                    </text><text id="SvgjsText1295" font-family="Public Sans"
                                                        x="152.14285714285714" y="192.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a5a3ae"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1296">We</tspan>
                                                        <title>We</title>
                                                    </text><text id="SvgjsText1298" font-family="Public Sans"
                                                        x="213" y="192.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1299">Th</tspan>
                                                        <title>Th</title>
                                                    </text><text id="SvgjsText1301" font-family="Public Sans"
                                                        x="273.85714285714283" y="192.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a5a3ae"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1302">Fr</tspan>
                                                        <title>Fr</title>
                                                    </text><text id="SvgjsText1304" font-family="Public Sans"
                                                        x="334.71428571428567" y="192.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a5a3ae"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1305">Sa</tspan>
                                                        <title>Sa</title>
                                                    </text><text id="SvgjsText1307" font-family="Public Sans"
                                                        x="395.5714285714285" y="192.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1308">Su</tspan>
                                                        <title>Su</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1311" class="apexcharts-grid">
                                                <g id="SvgjsG1312" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1314" x1="0" y1="0"
                                                        x2="426" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1315" x1="0" y1="32.7401598148346"
                                                        x2="426" y2="32.7401598148346" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1316" x1="0" y1="65.4803196296692"
                                                        x2="426" y2="65.4803196296692" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1317" x1="0" y1="98.2204794445038"
                                                        x2="426" y2="98.2204794445038" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1318" x1="0" y1="130.9606392593384"
                                                        x2="426" y2="130.9606392593384" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1319" x1="0" y1="163.700799074173"
                                                        x2="426" y2="163.700799074173" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1313" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1321" x1="0" y1="163.70079907417298"
                                                    x2="426" y2="163.70079907417298" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1320" x1="0" y1="1" x2="0"
                                                    y2="163.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1268" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1269" class="apexcharts-series" rel="1"
                                                    seriesName="seriesx1" data:realIndex="0">
                                                    <path id="SvgjsPath1273"
                                                        d="M 18.865714285714283 159.70079907417298L 18.865714285714283 102.22047944450378Q 18.865714285714283 98.22047944450378 22.865714285714283 98.22047944450378L 37.99142857142857 98.22047944450378Q 41.99142857142857 98.22047944450378 41.99142857142857 102.22047944450378L 41.99142857142857 102.22047944450378L 41.99142857142857 159.70079907417298Q 41.99142857142857 163.70079907417298 37.99142857142857 163.70079907417298L 22.865714285714283 163.70079907417298Q 18.865714285714283 163.70079907417298 18.865714285714283 159.70079907417298z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 18.865714285714283 159.70079907417298L 18.865714285714283 102.22047944450378Q 18.865714285714283 98.22047944450378 22.865714285714283 98.22047944450378L 37.99142857142857 98.22047944450378Q 41.99142857142857 98.22047944450378 41.99142857142857 102.22047944450378L 41.99142857142857 102.22047944450378L 41.99142857142857 159.70079907417298Q 41.99142857142857 163.70079907417298 37.99142857142857 163.70079907417298L 22.865714285714283 163.70079907417298Q 18.865714285714283 163.70079907417298 18.865714285714283 159.70079907417298z"
                                                        pathFrom="M 18.865714285714283 159.70079907417298L 18.865714285714283 159.70079907417298L 41.99142857142857 159.70079907417298L 41.99142857142857 159.70079907417298L 41.99142857142857 159.70079907417298L 41.99142857142857 159.70079907417298L 41.99142857142857 159.70079907417298L 18.865714285714283 159.70079907417298"
                                                        cy="98.22047944450378" cx="79.72285714285714" j="0"
                                                        val="40" barHeight="65.4803196296692"
                                                        barWidth="23.125714285714285"></path>
                                                    <path id="SvgjsPath1275"
                                                        d="M 79.72285714285714 159.70079907417298L 79.72285714285714 61.29527967596054Q 79.72285714285714 57.29527967596054 83.72285714285714 57.29527967596054L 98.84857142857142 57.29527967596054Q 102.84857142857142 57.29527967596054 102.84857142857142 61.29527967596054L 102.84857142857142 61.29527967596054L 102.84857142857142 159.70079907417298Q 102.84857142857142 163.70079907417298 98.84857142857142 163.70079907417298L 83.72285714285714 163.70079907417298Q 79.72285714285714 163.70079907417298 79.72285714285714 159.70079907417298z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 79.72285714285714 159.70079907417298L 79.72285714285714 61.29527967596054Q 79.72285714285714 57.29527967596054 83.72285714285714 57.29527967596054L 98.84857142857142 57.29527967596054Q 102.84857142857142 57.29527967596054 102.84857142857142 61.29527967596054L 102.84857142857142 61.29527967596054L 102.84857142857142 159.70079907417298Q 102.84857142857142 163.70079907417298 98.84857142857142 163.70079907417298L 83.72285714285714 163.70079907417298Q 79.72285714285714 163.70079907417298 79.72285714285714 159.70079907417298z"
                                                        pathFrom="M 79.72285714285714 159.70079907417298L 79.72285714285714 159.70079907417298L 102.84857142857142 159.70079907417298L 102.84857142857142 159.70079907417298L 102.84857142857142 159.70079907417298L 102.84857142857142 159.70079907417298L 102.84857142857142 159.70079907417298L 79.72285714285714 159.70079907417298"
                                                        cy="57.29527967596054" cx="140.57999999999998" j="1"
                                                        val="65" barHeight="106.40551939821243"
                                                        barWidth="23.125714285714285"></path>
                                                    <path id="SvgjsPath1277"
                                                        d="M 140.57999999999998 159.70079907417298L 140.57999999999998 85.85039953708649Q 140.57999999999998 81.85039953708649 144.57999999999998 81.85039953708649L 159.70571428571427 81.85039953708649Q 163.70571428571427 81.85039953708649 163.70571428571427 85.85039953708649L 163.70571428571427 85.85039953708649L 163.70571428571427 159.70079907417298Q 163.70571428571427 163.70079907417298 159.70571428571427 163.70079907417298L 144.57999999999998 163.70079907417298Q 140.57999999999998 163.70079907417298 140.57999999999998 159.70079907417298z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 140.57999999999998 159.70079907417298L 140.57999999999998 85.85039953708649Q 140.57999999999998 81.85039953708649 144.57999999999998 81.85039953708649L 159.70571428571427 81.85039953708649Q 163.70571428571427 81.85039953708649 163.70571428571427 85.85039953708649L 163.70571428571427 85.85039953708649L 163.70571428571427 159.70079907417298Q 163.70571428571427 163.70079907417298 159.70571428571427 163.70079907417298L 144.57999999999998 163.70079907417298Q 140.57999999999998 163.70079907417298 140.57999999999998 159.70079907417298z"
                                                        pathFrom="M 140.57999999999998 159.70079907417298L 140.57999999999998 159.70079907417298L 163.70571428571427 159.70079907417298L 163.70571428571427 159.70079907417298L 163.70571428571427 159.70079907417298L 163.70571428571427 159.70079907417298L 163.70571428571427 159.70079907417298L 140.57999999999998 159.70079907417298"
                                                        cy="81.85039953708649" cx="201.43714285714285" j="2"
                                                        val="50" barHeight="81.85039953708649"
                                                        barWidth="23.125714285714285"></path>
                                                    <path id="SvgjsPath1279"
                                                        d="M 201.43714285714285 159.70079907417298L 201.43714285714285 94.03543949079514Q 201.43714285714285 90.03543949079514 205.43714285714285 90.03543949079514L 220.56285714285713 90.03543949079514Q 224.56285714285713 90.03543949079514 224.56285714285713 94.03543949079514L 224.56285714285713 94.03543949079514L 224.56285714285713 159.70079907417298Q 224.56285714285713 163.70079907417298 220.56285714285713 163.70079907417298L 205.43714285714285 163.70079907417298Q 201.43714285714285 163.70079907417298 201.43714285714285 159.70079907417298z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 201.43714285714285 159.70079907417298L 201.43714285714285 94.03543949079514Q 201.43714285714285 90.03543949079514 205.43714285714285 90.03543949079514L 220.56285714285713 90.03543949079514Q 224.56285714285713 90.03543949079514 224.56285714285713 94.03543949079514L 224.56285714285713 94.03543949079514L 224.56285714285713 159.70079907417298Q 224.56285714285713 163.70079907417298 220.56285714285713 163.70079907417298L 205.43714285714285 163.70079907417298Q 201.43714285714285 163.70079907417298 201.43714285714285 159.70079907417298z"
                                                        pathFrom="M 201.43714285714285 159.70079907417298L 201.43714285714285 159.70079907417298L 224.56285714285713 159.70079907417298L 224.56285714285713 159.70079907417298L 224.56285714285713 159.70079907417298L 224.56285714285713 159.70079907417298L 224.56285714285713 159.70079907417298L 201.43714285714285 159.70079907417298"
                                                        cy="90.03543949079514" cx="262.2942857142857" j="3"
                                                        val="45" barHeight="73.66535958337784"
                                                        barWidth="23.125714285714285"></path>
                                                    <path id="SvgjsPath1281"
                                                        d="M 262.2942857142857 159.70079907417298L 262.2942857142857 20.370079907417306Q 262.2942857142857 16.370079907417306 266.2942857142857 16.370079907417306L 281.42 16.370079907417306Q 285.42 16.370079907417306 285.42 20.370079907417306L 285.42 20.370079907417306L 285.42 159.70079907417298Q 285.42 163.70079907417298 281.42 163.70079907417298L 266.2942857142857 163.70079907417298Q 262.2942857142857 163.70079907417298 262.2942857142857 159.70079907417298z"
                                                        fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 262.2942857142857 159.70079907417298L 262.2942857142857 20.370079907417306Q 262.2942857142857 16.370079907417306 266.2942857142857 16.370079907417306L 281.42 16.370079907417306Q 285.42 16.370079907417306 285.42 20.370079907417306L 285.42 20.370079907417306L 285.42 159.70079907417298Q 285.42 163.70079907417298 281.42 163.70079907417298L 266.2942857142857 163.70079907417298Q 262.2942857142857 163.70079907417298 262.2942857142857 159.70079907417298z"
                                                        pathFrom="M 262.2942857142857 159.70079907417298L 262.2942857142857 159.70079907417298L 285.42 159.70079907417298L 285.42 159.70079907417298L 285.42 159.70079907417298L 285.42 159.70079907417298L 285.42 159.70079907417298L 262.2942857142857 159.70079907417298"
                                                        cy="16.370079907417306" cx="323.15142857142854" j="4"
                                                        val="90" barHeight="147.33071916675567"
                                                        barWidth="23.125714285714285"></path>
                                                    <path id="SvgjsPath1283"
                                                        d="M 323.15142857142854 159.70079907417298L 323.15142857142854 77.66535958337784Q 323.15142857142854 73.66535958337784 327.15142857142854 73.66535958337784L 342.27714285714285 73.66535958337784Q 346.27714285714285 73.66535958337784 346.27714285714285 77.66535958337784L 346.27714285714285 77.66535958337784L 346.27714285714285 159.70079907417298Q 346.27714285714285 163.70079907417298 342.27714285714285 163.70079907417298L 327.15142857142854 163.70079907417298Q 323.15142857142854 163.70079907417298 323.15142857142854 159.70079907417298z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 323.15142857142854 159.70079907417298L 323.15142857142854 77.66535958337784Q 323.15142857142854 73.66535958337784 327.15142857142854 73.66535958337784L 342.27714285714285 73.66535958337784Q 346.27714285714285 73.66535958337784 346.27714285714285 77.66535958337784L 346.27714285714285 77.66535958337784L 346.27714285714285 159.70079907417298Q 346.27714285714285 163.70079907417298 342.27714285714285 163.70079907417298L 327.15142857142854 163.70079907417298Q 323.15142857142854 163.70079907417298 323.15142857142854 159.70079907417298z"
                                                        pathFrom="M 323.15142857142854 159.70079907417298L 323.15142857142854 159.70079907417298L 346.27714285714285 159.70079907417298L 346.27714285714285 159.70079907417298L 346.27714285714285 159.70079907417298L 346.27714285714285 159.70079907417298L 346.27714285714285 159.70079907417298L 323.15142857142854 159.70079907417298"
                                                        cy="73.66535958337784" cx="384.0085714285714" j="5"
                                                        val="55" barHeight="90.03543949079514"
                                                        barWidth="23.125714285714285"></path>
                                                    <path id="SvgjsPath1285"
                                                        d="M 384.0085714285714 159.70079907417298L 384.0085714285714 53.11023972225189Q 384.0085714285714 49.11023972225189 388.0085714285714 49.11023972225189L 403.1342857142857 49.11023972225189Q 407.1342857142857 49.11023972225189 407.1342857142857 53.11023972225189L 407.1342857142857 53.11023972225189L 407.1342857142857 159.70079907417298Q 407.1342857142857 163.70079907417298 403.1342857142857 163.70079907417298L 388.0085714285714 163.70079907417298Q 384.0085714285714 163.70079907417298 384.0085714285714 159.70079907417298z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskk3g87fivj)"
                                                        pathTo="M 384.0085714285714 159.70079907417298L 384.0085714285714 53.11023972225189Q 384.0085714285714 49.11023972225189 388.0085714285714 49.11023972225189L 403.1342857142857 49.11023972225189Q 407.1342857142857 49.11023972225189 407.1342857142857 53.11023972225189L 407.1342857142857 53.11023972225189L 407.1342857142857 159.70079907417298Q 407.1342857142857 163.70079907417298 403.1342857142857 163.70079907417298L 388.0085714285714 163.70079907417298Q 384.0085714285714 163.70079907417298 384.0085714285714 159.70079907417298z"
                                                        pathFrom="M 384.0085714285714 159.70079907417298L 384.0085714285714 159.70079907417298L 407.1342857142857 159.70079907417298L 407.1342857142857 159.70079907417298L 407.1342857142857 159.70079907417298L 407.1342857142857 159.70079907417298L 407.1342857142857 159.70079907417298L 384.0085714285714 159.70079907417298"
                                                        cy="49.11023972225189" cx="444.8657142857142" j="6"
                                                        val="70" barHeight="114.59055935192109"
                                                        barWidth="23.125714285714285"></path>
                                                    <g id="SvgjsG1271" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1272" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1274" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1276" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1278" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1280" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1282" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1284" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1270" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1322" x1="0" y1="0" x2="426"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1323" x1="0" y1="0" x2="426"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1324" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1325" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1326" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1309" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-8, 0)">
                                            <g id="SvgjsG1310" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG1259" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 101px;"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 441px; height: 203px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded p-3 mt-2">
                        <div class="row gap-4 gap-sm-0">
                            <div class="col-12 col-sm-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="badge rounded bg-label-primary p-1">
                                        <i class="ti ti-currency-dollar ti-sm"></i>
                                    </div>
                                    <h6 class="mb-0">Earnings</h6>
                                </div>
                                <h4 class="my-2 pt-1">$545.69</h4>
                                <div class="progress w-75" style="height: 4px">
                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i>
                                    </div>
                                    <h6 class="mb-0">Profit</h6>
                                </div>
                                <h4 class="my-2 pt-1">$256.34</h4>
                                <div class="progress w-75" style="height: 4px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="badge rounded bg-label-danger p-1">
                                        <i class="ti ti-brand-paypal ti-sm"></i>
                                    </div>
                                    <h6 class="mb-0">Expense</h6>
                                </div>
                                <h4 class="my-2 pt-1">$74.19</h4>
                                <div class="progress w-75" style="height: 4px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Earning Reports -->

        <!-- Support Tracker -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Support Tracker</h5>
                        <small class="text-muted">Last 7 Days</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                            <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                                <h1 class="mb-0">164</h1>
                                <p class="mb-0">Total Tickets</p>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                                    <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                        <small class="text-muted">142</small>
                                    </div>
                                </li>
                                <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                                    <div class="badge rounded bg-label-info p-1">
                                        <i class="ti ti-circle-check ti-sm"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                        <small class="text-muted">28</small>
                                    </div>
                                </li>
                                <li class="d-flex gap-3 align-items-center pb-1">
                                    <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Response Time</h6>
                                        <small class="text-muted">1 Day</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-8 col-md-12 col-lg-8" style="position: relative;">
                            <div id="supportTracker" style="min-height: 257.9px;">
                                <div id="apexchartsidxizr8a"
                                    class="apexcharts-canvas apexchartsidxizr8a apexcharts-theme-light"
                                    style="width: 416px; height: 257.9px;"><svg id="SvgjsSvg1327" width="416"
                                        height="257.9" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1329" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(41, -10)">
                                            <defs id="SvgjsDefs1328">
                                                <clipPath id="gridRectMaskidxizr8a">
                                                    <rect id="SvgjsRect1331" width="342" height="375"
                                                        x="-3" y="-1" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskidxizr8a"></clipPath>
                                                <clipPath id="nonForecastMaskidxizr8a"></clipPath>
                                                <clipPath id="gridRectMarkerMaskidxizr8a">
                                                    <rect id="SvgjsRect1332" width="340" height="377"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1337" x1="1"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1338" stop-opacity="1"
                                                        stop-color="rgba(115,103,240,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1339" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1340" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1348" x1="1"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1349" stop-opacity="1"
                                                        stop-color="rgba(115,103,240,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1350" stop-opacity="0.6"
                                                        stop-color="rgba(115,103,240,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1351" stop-opacity="0.6"
                                                        stop-color="rgba(115,103,240,0.6)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1333" class="apexcharts-radialbar">
                                                <g id="SvgjsG1334">
                                                    <g id="SvgjsG1335" class="apexcharts-tracks">
                                                        <g id="SvgjsG1336"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="22.632926829268296"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1342">
                                                        <g id="SvgjsG1347"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="CompletedxTask" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1352"
                                                                d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="url(#SvgjsLinearGradient1348)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="22.632926829268296"
                                                                stroke-dasharray="10"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="230" data:value="85" index="0"
                                                                j="0"
                                                                data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1343" r="102.63658536585366"
                                                            cx="168" cy="168"
                                                            class="apexcharts-radialbar-hollow" fill="transparent">
                                                        </circle>
                                                        <g id="SvgjsG1344" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText1345" font-family="Public Sans"
                                                                x="168" y="148" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="600" fill="#a5a3ae"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: &quot;Public Sans&quot;;">Completed
                                                                Task</text><text id="SvgjsText1346"
                                                                font-family="Public Sans" x="168" y="194"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="38px" font-weight="600" fill="#5d596c"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: &quot;Public Sans&quot;;">85%</text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1353" x1="0" y1="0" x2="336"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1354" x1="0" y1="0" x2="336"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1330" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 441px; height: 307px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Support Tracker -->

    </div>
@endsection
