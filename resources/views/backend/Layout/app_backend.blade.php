<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <title>Rao Vặt</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('theme_admin/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{asset('theme_admin/css/dashboard.css')}}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Rao Vặt</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
<!--                             
                        @foreach(config('nav') as $item)
                            {{ dump($item['route']) }}
                            @if(Route::has($item['route']))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($item['route']) }}" title="{{ $item['name'] }}">
                                        <span data-feather="{{ $item['icon'] }}"></span>
                                        {{ $item['name'] }}
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="{{ $item['name'] }}">
                                        <span data-feather="{{ $item['icon'] }}"></span>
                                        {{ $item['name'] }} (Route không tồn tại)
                                    </a>
                                </li>
                            @endif
                        @endforeach -->
                        @foreach(config('nav') as $item)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($item['route'])}}" title="{{$item['name']}}">
                                    <span data-feather="{{$item['icon']}}"></span>
                                    {{$item['name']}} 
                                    </a>
                                </li>

                            @endforeach

                        
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <!-- <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </nav>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <button class="btn btn-sm btn-outline-secondary">Share</button>
                                <button class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                            </button>
                        </div>
                    </div>
                    
                   @yield('content')
                </main>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="{{asset('theme_admin/js/popper.min.js')}} "></script>
        <script src="{{asset('theme_admin/js/bootstrap.min.js')}}"></script>
        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
        <!-- Graphs -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
     
    </body>
</html>