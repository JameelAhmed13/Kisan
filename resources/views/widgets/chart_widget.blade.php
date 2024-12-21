@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
        <div class="col-sm-6">
            <h3>Chart</h3>
        </div>
        <div class="col-sm-6">
            <nav>
            <ol class="breadcrumb justify-content-sm-end align-items-center">
                <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                    <svg class="svg-color">
                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                    </svg></a></li>
                <li class="breadcrumb-item">Widgets</li>
                <li class="breadcrumb-item active">Chart</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>

    <div class="container-fluid chart-widget">
        <div class="row">
          <div class="col-xl-4 col-md-12 box-col-12">
            <div class="card o-hidden">
              <div class="chart-widget-top">
                <div class="row card-body pb-0 m-0">
                  <div class="col-xl-9 col-lg-8 col-9 p-0">
                    <h4 class="mb-2">Total Sale</h4>
                    <h4>$3654.00</h4><span>Compare to last month</span>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                    <h6 class="font-success">+65%</h6>
                  </div>
                </div>
                <div>
                  <div id="chart-widget1"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12 box-col-12">
            <div class="card o-hidden">
              <div class="chart-widget-top">
                <div class="row card-body pb-0 m-0">
                  <div class="col-xl-9 col-lg-8 col-9 p-0">
                    <h4 class="mb-2">Total Project</h4>
                    <h4>12569</h4><span>Compare to last month</span>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                    <h6 class="font-success">+65%</h6>
                  </div>
                </div>
                <div id="chart-widget2">
                  <div class="flot-chart-placeholder" id="chart-widget-top-second"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12 box-col-12">
            <div class="card o-hidden">
              <div class="chart-widget-top">
                <div class="row card-body pb-0 m-0">
                  <div class="col-xl-9 col-lg-8 col-9 p-0">
                    <h4 class="mb-2">Total Product</h4>
                    <h4>93M</h4><span>Compare to last month</span>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                    <h6 class="font-success">+65%</h6>
                  </div>
                </div>
                <div id="chart-widget3">
                  <div class="flot-chart-placeholder" id="chart-widget-top-third"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Chart widget top Ends-->
        <!-- Chart widget with bar chart Start-->
        <div class="row">
          <div class="col-md-12 box-col-12">
            <div class="card o-hidden">
              <div class="card-header">
                <h4>Monthly  History</h4>
              </div>
              <div class="bar-chart-widget">
                <div class="bottom-content card-body">
                  <div class="row">
                    <div class="col-12">
                      <div id="chart-widget4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 box-col-6 xl-50">
            <div class="card">
              <div class="card-header">
                <h4>Skill Status</h4>
              </div>
              <div class="card-body">
                <div class="chart-container skill-chart">
                  <div id="circlechart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 box-col-6 xl-50">
            <div class="card">
              <div class="card-header">
                <div class="header-top">
                  <h4>Order Status</h4>
                  <div class="card-header-right-icon">
                    <div class="dropdown">
                      <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown">Today</button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container progress-chart">
                  <div id="progress1"></div>
                  <div id="progress2"></div>
                  <div id="progress3"></div>
                  <div id="progress4"></div>
                  <div id="progress5">               </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Chart widget with bar chart Ends-->
        <!-- small widgets Start-->
        <div class="row">
          <!-- Live Product chart widget Start-->
          <div class="xl-50 col-xl-7 col-lg-12">
            <div class="small-chart-widget chart-widgets-small">
              <div class="card">
                <div class="card-header">
                  <h4>Live Products</h4>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <div class="row">
                      <div class="col-12">
                        <div id="chart-widget6"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Live Product chart widget Ends-->
          <!-- Turnover chart widget Start-->
          <div class="xl-50 col-xl-5 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Turn over</h4>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <div class="row">
                    <div class="col-12">
                      <div id="chart-widget7"></div>
                    </div>
                  </div>
                </div>
                <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy"></i></button>
                  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-12"&gt;
  &lt;div id="chart-widget7"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          <!-- Turnover chart widget Ends-->
          <!-- Crypto price chart Start-->
          <div class="xl-50 col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Cryptocurrency Prices</h4>
              </div>
              <div class="card-body">
                <div class="chart-container crypto-chart">
                  <div class="row">
                    <div class="col-12">
                      <div id="chart-crypto"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Crypto price chart end-->
          <div class="xl-50 col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Crypto Annotations</h4>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <div class="row">
                    <div class="col-12">
                      <div id="crypto-annotation"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- small widgets Ends-->
          <!-- Browser uses and website visiter widget Start-->
        </div>
        <div class="row">
          <!-- browser uses widget chart Start-->
          <div class="col-sm-12 box-col-12">
            <div class="donut-chart-widget">
              <div class="card">
                <div class="card-header">
                  <h4>Stock Market</h4>
                </div>
                <div class="card-body">
                  <div id="chart-widget13"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- browser uses widget chart Endss-->
          <!-- status widget Start-->
          <div class="col-xl-5 col-lg-12 box-col-12">
            <div class="card">
              <div class="card-header">
                <h4>Finance</h4>
              </div>
              <div class="card-body">
                <div class="chart-container column-container">
                  <div id="columnchart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-12 box-col-6">
            <div class="card">
              <div class="card-header">
                <h4>Order Status </h4>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <div id="linechart"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- status widget Ends-->
          <!-- Monthly Sale chart widget Start-->
          <div class="xl-50 col-xl-5 col-lg-12 box-col-6">
            <div class="small-chart-widget chart-widgets-small">
              <div class="card">
                <div class="card-header">
                  <h4>Monthly Sales</h4>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icon-more-alt"></i></li>
                      <li><i class="view-html fa fa-code"></i></li>
                      <li><i class="icofont icofont-maximize full-card"></i></li>
                      <li><i class="icofont icofont-minus minimize-card"></i></li>
                      <li><i class="icofont icofont-refresh reload-card"></i></li>
                      <li><i class="icofont icofont-error close-card"></i></li>
                    </ul>
                  </div>
                  <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <div class="row">
                      <div class="col-12">
                        <div id="chart-widget8"></div>
                      </div>
                    </div>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy"></i></button>
                    <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-12"&gt;
  &lt;div id="chart-widget8"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Monthly Sale chart widget Ends-->
          <!-- Uses chart widget Start-->
          <div class="xl-50 col-xl-7 col-lg-12 box-col-12">
            <div class="small-chart-widget chart-widgets-small">
              <div class="card">
                <div class="card-header">
                  <h4>Uses</h4>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icon-more-alt"></i></li>
                      <li><i class="view-html fa fa-code"></i></li>
                      <li><i class="icofont icofont-maximize full-card"></i></li>
                      <li><i class="icofont icofont-minus minimize-card"></i></li>
                      <li><i class="icofont icofont-refresh reload-card"></i></li>
                      <li><i class="icofont icofont-error close-card"></i></li>
                    </ul>
                  </div>
                  <p class="desc mb-0 mt-1"><span></span><code></code><span></span></p>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <div class="row">
                      <div class="col-12">
                        <div id="chart-widget9"></div>
                      </div>
                    </div>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy"></i></button>
                    <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="chart-container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-12"&gt;
  &lt;div id="chart-widget9"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Uses chart widget Ends-->
          <!-- Container-fluid ends-->
        </div>
      </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/apexchart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/widget/chart-widget.js') }}"></script>
    <script src="{{ asset('assets/js/apexchart/moment.min.js') }}"></script>
@endsection