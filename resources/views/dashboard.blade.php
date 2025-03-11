@extends('layouts.admin')


@section('content')
    <style>
        .dashboard {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .dashboard__tile-counts {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .dashboard__tile-count {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            flex: 1;
            min-width: 180px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
          .dashboard__tile-count .count_top {
            font-size: 1.2em;
            color: #6c757d;
            display: block;
            margin-bottom: 10px;

        }
         .dashboard__tile-count .count {
            font-size: 2.5em;
             font-weight: 600;
             color: #343a40;
        }
        .dashboard__panels {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .dashboard__panel {
            flex: 1 1 calc(50% - 20px);
            background-color: #ffffff;
            border-radius: 8px;
             box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        .x_panel .x_title {
            background-color: #f0f0f0;
             border-radius: 8px 8px 0 0;
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
        }

        .x_panel .x_title h2 {
            font-size: 1.5em;
            margin: 0;
        }

        .x_panel .x_title small {
            font-size: 0.8em;
             margin-left: 5px;
            color: #868e96;

        }

       .x_panel .x_title .nav {
            display: flex;
             margin-right: 0;
             padding: 0;
        }

        .x_panel .x_title .nav li{
          list-style: none;

        }

        .x_panel .x_title .nav a {
          margin-left: 5px;
            color: #6c757d;

        }
        .x_panel .x_title .nav a:hover{
            color: #495057;
        }
          .x_panel .x_title .clearfix {
             clear: both;

         }
        .x_panel .x_content {
            padding: 20px;
        }


         .media{
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;

        }
         .media .pull-left.date {
            text-align: center;
             margin-right: 15px;
             display: flex;
              flex-direction: column;
        }
        .media .pull-left.date .month {
            font-size: 1.1em;
            color: #6c757d;

        }

        .media .pull-left.date .day {
           font-size: 1.4em;
           color: #343a40;
           font-weight: 600;
        }

        .media .media-body .title {
            font-weight: 600;
           color: #343a40;
            margin-bottom: 5px;
              display: block;

        }

        .media .media-body p {
            color: #6c757d;
             font-size: 0.9em;
            margin: 0;

        }


        /* Responsive adjustments */
        @media (max-width: 992px) {
            .dashboard__panel {
                flex: 1 1 calc(100% - 20px);
            }
        }

        @media (max-width: 768px) {
          .dashboard__tile-counts {
            flex-direction: column;
        }

        .dashboard__tile-count{
          min-width: auto;
           text-align: left;
           flex: auto;
        }
        }
    </style>
@if(Auth::user()->role == 'admin')
    <div class="dashboard">
        <div class="dashboard__tile-counts">
            <div class="dashboard__tile-count tile_stats_count">
                <span class="count_top"><i class="fa fa-briefcase"></i> Total Services</span>
                <div class="count">{{ $serviceCount }}</div>
            </div>
            <div class="dashboard__tile-count tile_stats_count">
                <span class="count_top"><i class="fa fa-comments-o"></i> Total Testimonials</span>
                <div class="count">{{ $testimoniCount }}</div>
            </div>
            <div class="dashboard__tile-count tile_stats_count">
                <span class="count_top"><i class="fa fa-newspaper-o"></i> Total News</span>
                <div class="count">{{ $beritaCount }}</div>
            </div>
            <div class="dashboard__tile-count tile_stats_count">
                <span class="count_top"><i class="fa fa-image"></i> Total Portfolios</span>
                <div class="count">{{ $portofolioCount }}</div>
            </div>
            <div class="dashboard__tile-count tile_stats_count">
                <span class="count_top"><i class="fa fa-envelope-o"></i> Total Contacts</span>
                <div class="count">{{ $contactCount }}</div>
            </div>
        </div>

        <div class="dashboard__panels">
            <div class="dashboard__panel">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Latest Services <small>Recent Entries</small></h2>
                         <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       @foreach($latestServices as $service)
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">{{ \Carbon\Carbon::parse($service->created_at)->format('M') }}</p>
                                    <p class="day">{{ \Carbon\Carbon::parse($service->created_at)->format('d') }}</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">{{ $service->judul }}</a>
                                    <p>{{ Str::limit($service->deskripsi, 50) }}</p>
                                </div>
                            </article>
                       @endforeach
                    </div>
                </div>
            </div>

           <div class="dashboard__panel">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Latest Testimonials <small>Recent Entries</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       @foreach($latestTestimonials as $testimoni)
                            <article class="media event">
                               <a class="pull-left date">
                                    <p class="month">{{ \Carbon\Carbon::parse($testimoni->created_at)->format('M') }}</p>
                                    <p class="day">{{ \Carbon\Carbon::parse($testimoni->created_at)->format('d') }}</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">{{ $testimoni->nama }}</a>
                                    <p>{{ Str::limit($testimoni->testimoni, 50) }}</p>
                                </div>
                            </article>
                       @endforeach
                    </div>
                  </div>
            </div>

            <div class="dashboard__panel">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Latest News <small>Recent Entries</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       @foreach($latestNews as $berita)
                            <article class="media event">
                               <a class="pull-left date">
                                    <p class="month">{{ \Carbon\Carbon::parse($berita->created_at)->format('M') }}</p>
                                    <p class="day">{{ \Carbon\Carbon::parse($berita->created_at)->format('d') }}</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">{{ $berita->judul }}</a>
                                    <p>{{ Str::limit($berita->isi, 50) }}</p>
                                </div>
                            </article>
                       @endforeach
                    </div>
                  </div>
            </div>
          <div class="dashboard__panel">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Latest Portfolios <small>Recent Entries</small></h2>
                   <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   @foreach($latestPortfolios as $portofolio)
                        <article class="media event">
                           <a class="pull-left date">
                                <p class="month">{{ \Carbon\Carbon::parse($portofolio->created_at)->format('M') }}</p>
                                <p class="day">{{ \Carbon\Carbon::parse($portofolio->created_at)->format('d') }}</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">{{ $portofolio->judul_porto }}</a>
                                <p>{{ Str::limit($portofolio->isi, 50) }}</p>
                            </div>
                        </article>
                   @endforeach
                </div>
              </div>
            </div>
               <div class="dashboard__panel">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Latest Contacts <small>Recent Entries</small></h2>
                   <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   @foreach($latestContacts as $contact)
                        <article class="media event">
                            <a class="pull-left date">
                                <p class="month">{{ \Carbon\Carbon::parse($contact->created_at)->format('M') }}</p>
                                <p class="day">{{ \Carbon\Carbon::parse($contact->created_at)->format('d') }}</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">{{ $contact->name }}</a>
                                <p>{{ Str::limit($contact->message, 50) }}</p>
                            </div>
                        </article>
                   @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
    @endif
@endsection
