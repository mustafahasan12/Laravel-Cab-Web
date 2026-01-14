@extends('admin.layout.app')

@section('content')


<div id="page-container">
    <div id="fx-container" class="fx-opacity">
        <div id="page-content" class="block">
            <div class="row gutter30">
                <div class="col-md-12">
                    <div class="filters">
                        <form method="GET">
                            <div class="row">
                                <div class="col-md-2">
                                    <select id="date" name="date" class="select-chosen" data-placeholder="Choose a Date" style="width: 100%;">
                                    <option value="">Choose a Date...</option>
                                      @foreach ($taxi_Manifests_date as $item)
                                        <option value="{{$item->Date_Of_Service}}" @if($item->Date_Of_Service == request()->date) selected @endif> {{$item->Date_Of_Service}} </option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="Space_On" name="Space_On" class="select-chosen" data-placeholder="Choose a Type" style="width: 100%;">
                                    <option value="">Choose a Type...</option>

                                        <option value="all" @if('all' == request()->Space_On) selected @endif> All </option>
                                        <option value="AM" @if('AM' == request()->Space_On) selected @endif> AM </option>
                                        <option value="WH" @if('WH' == request()->Space_On) selected @endif> WH </option>

                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" name="submi" class="btn btn-block btn-primary">Search</button>
                                </div>
                                 <div class="col-md-2">
                                 <a href="{{route('taxi_manifest_driver_count')}}" > <button type="button" name="refresh" class="btn btn-block btn-primary">Refresh</button> </a>   
                                </div>
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Hours</th>
                                <th>Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $count = 0;
                            @endphp
                            @foreach ($taxi_manifest_counts as $key => $value)
                            @php
                                     $count+= count($value);
                            @endphp
                                <tr>
                                    <td>{{$key}}</td>
                                    <td>{{count($value)}}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td> {{$count}}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<script>
    $(function () {
        // Set up timeline scrolling functionality
        $('.timeline-con').slimScroll({height: 565, color: '#000000', size: '3px', touchScrollStep: 100, distance: '0'});
        $('.timeline').css('min-height', '565px');

        // Demo status updates and timeline functionality
        var statusUpdate = $('#status-update');
        var statusUpdateVal = '';

        $('#accept-request').click(function () {
            $(this).replaceWith('<span class="label label-success">Awesome, you became friends!');
        });

        $('#status-update-btn').click(function () {
            statusUpdateVal = statusUpdate.val();

            if (statusUpdateVal) {
                $('.timeline-con').slimScroll({scrollTo: '0px'});

                $('.timeline').prepend('<li class="animation-pullDown">' +
                    '<div class="timeline-item">' +
                    '<h4 class="timeline-title"><small class="timeline-meta">just now</small><i class="fa fa-file"></i> Status</h4>' +
                    '<div class="timeline-content"><p>' + $('<div />').text(statusUpdateVal).html().substring(0, 200) + '</p><em>Demo functionality</em></div>' +
                    '</div>' +
                    '</li>');

                statusUpdate.val('').attr('placeholder', 'I hope you like it! :-)');
            }
        });

        /*
         * Flot 0.8.3 Jquery plugin is used for charts
         *
         * For more examples or getting extra plugins you can check http://www.flotcharts.org/
         * Plugins included in this template: pie, resize, stack
         */

        // Get the elements where we will attach the charts
        var chartClassic = $('#chart-classic');

        // Random data for the charts
        var dataEarnings = [[0, 60], [1, 100], [2, 80], [3, 84], [4, 124], [5, 90], [6, 150]];
        var dataSales = [[0, 30], [1, 50], [2, 40], [3, 42], [4, 62], [5, 45], [6, 75]];

        /* Classic Chart */
        $.plot(chartClassic,
            [
                {
                    data: dataEarnings,
                    lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.25}, {opacity: 0.25}]}},
                    points: {show: true, radius: 7}
                },
                {
                    data: dataSales,
                    lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.15}, {opacity: 0.15}]}},
                    points: {show: true, radius: 7}
                }
            ],
            {
                colors: ['#f39c12', '#2e3030'],
                legend: {show: false},
                grid: {borderWidth: 0, hoverable: true, clickable: true},
                yaxis: {show: false},
                xaxis: {show: false}
            }
        );

        // Creating and attaching a tooltip to the classic chart
        var previousPoint = null, ttlabel = null;
        chartClassic.bind('plothover', function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $('#chart-tooltip').remove();
                    var x = item.datapoint[0], y = item.datapoint[1];

                    if (item.seriesIndex === 1) {
                        ttlabel = '<strong>' + y + '</strong> sales';
                    } else {
                        ttlabel = '$ <strong>' + y + '</strong>';
                    }

                    $('<div id="chart-tooltip" class="chart-tooltip">' + ttlabel + '</div>')
                        .css({top: item.pageY - 45, left: item.pageX + 5}).appendTo("body").show();
                }
            }
            else {
                $('#chart-tooltip').remove();
                previousPoint = null;
            }
        });
    });
</script>
