@extends('layouts.app')

@section('title', '班級詳細資料 | ')

@section('content')
	<div class="page-header">
		<h1>班級詳細資料</h1>
	</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-body" style="padding: 30px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('classes') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">班級名稱</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $classes->name }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group" style="display: none;">
                            <input id="class_id" type="hidden" class="form-control" name="class_id" value="{{ $classes->id }}">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer" style="padding: 2px; background-color: #d9edf7;"></div>
            </div>
        </div>
    </div>

    @php ($mergesort_videoclick_count = 0)
    @php ($quicksort_videoclick_count = 0)

    @foreach ($classes->sort_details as $sort_detail)
        @if ($sort_detail->action_id == 15)
            @php ($mergesort_videoclick_count++)
        @elseif ($sort_detail->action_id == 10)
            @php ($quicksort_videoclick_count++)
        @endif
    @endforeach

    <!-- Chart -->
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Sort');
            data.addColumn('number', 'Click');
            data.addRows([
                ['Merge Sort', {{ $mergesort_videoclick_count }} ],
                ['Quick Sort', {{ $quicksort_videoclick_count }} ]
            ]);

            // Set chart options
            var options = {'title':'班上同學點擊學習影片的次數',
                           //'width':700,
                           //'height':300
                           'colors':['#5bc0de'],
                          };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>

@endsection

