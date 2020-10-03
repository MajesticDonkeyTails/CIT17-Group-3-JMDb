@extends('/layouts/master')

@section('content')

    <!-- Spotlight -->
    <div id = "spotlight" class = "container-fluid">
        
        <!-- Main -->
        <div class = "container spotlight">
            <div class = "row">
                <div class = "col-lg-12">
                    <h1>Explore Entertainment</h1>
                    <h5>Just your other average internet movie database clone</h5>
                </div>
            </div>
        </div>
        
        <!-- News header -->
        <div class = "container news-header">
            <h4>Latest News |</h4>
            <a href = "#">See all stories →</a>
        </div>
        
        <!-- News -->
        <div class = "container news">
            <div class = "row">
                <!-- News 1 -->
                <div class = "news-card-1 col-xl-3 col-sm-6">
                    <a href = "#" class = "news-link">
                        <img src = "{{ url('./img/bg-004.jpg') }}">
                        <div class = "news-body">
                            <h6>News 1 →</h6>
                            <p>October 31, 2020</p>
                            <p>Sample description text with no context.</p>
                        </div>
                    </a>
                </div>
                <!-- News 2 -->
                <div class = "news-card-2 col-xl-3 col-sm-6">
                    <a href = "#" class = "news-link">
                        <img src = "{{ url('./img/bg-004.jpg') }}">
                        <div class = "news-body">
                            <h6>News 2 →</h6>
                            <p>October 31, 2020</p>
                            <p>Sample description text with no context.</p>
                        </div>
                    </a>
                </div>
                <!-- News 3 -->
                <div class = "news-card-3 col-xl-3 col-sm-6">
                    <a href = "#" class = "news-link">
                        <img src = "{{ url('./img/bg-004.jpg') }}">
                        <div class = "news-body">
                            <h6>News 3 →</h6>
                            <p>October 31, 2020</p>
                            <p>Sample description text with no context.</p>
                        </div>
                    </a>
                </div>
                <!-- News 4 -->
                <div class = "news-card-4 col-xl-3 col-sm-6">
                    <a href = "#" class = "news-link">
                        <img src = "{{ url('./img/bg-004.jpg') }}">
                        <div class = "news-body">
                            <h6>News 4 →</h6>
                            <p>October 31, 2020</p>
                            <p>Sample description text with no context.</p>
                        </div>
                    </a>
                </div>         
            </div>
        </div>
    </div>

    <!-- Upcoming -->
    <div id = "upcoming" class = "container-fluid">
        <div class = "container news-header">
            <h4>Upcoming Movies |</h4>
            <a href = "#">See movies of this month →</a>
        </div>
    </div>

@endsection