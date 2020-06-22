@extends('layouts.front_page')

@section('content')
  <section class="page-section image breadcrumbs overlay">
      <div class="container">
          <h1>EVENT DETAIL PAGE</h1>
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Events</a></li>
              <li class="active">Event Detail Page</li>
          </ul>
      </div>
  </section>


  <!-- PAGE -->
  <section class="page-section with-sidebar sidebar-right first-section light">
      <div class="container">

          <!-- Content -->
          <section id="content" class="content col-sm-12 col-md-8 col-lg-9">

              <div class="owl-carousel img-carousel">
                  <div class="item"><img class="img-responsive" src="{{ asset('uploads/events') }}/{{ $single_event_details->events_photo }}" alt=""/></div>


              </div>

              <!-- -->
              <hr class="page-divider transparent half"/>
              <!-- -->

              <h1 class="section-title">
                  <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                  <span class="title-inner">{{ $single_event_details->events_title }} </span>
              </h1>
              <p class="font_roboto font_size16">{{ $single_event_details->events_details }}</p>


              <!-- -->
              <hr class="page-divider transparent"/>
              <!-- -->

              <!-- -->
              <hr class="page-divider transparent half2"/>

              <!-- -->
              <hr class="page-divider line"/>
              <!-- -->

              <h1 class="section-title clearfix">
                  <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                  <span class="title-inner">Event Price list <small> / perfect price for event</small></span>
              </h1>
              <div class="row price-tables">
                @foreach ($booking_categories as $booking_category)
                  <div class="col-xsp-8 col-sm-8 col-md-8 col-lg-4">
                      <div class="price-table">
                          <div class="price-table-header">
                              <div class="price-label">
                                  <h2 class="price-label-title">{{ $booking_category->booking_category_titel }}</h2>
                              </div>
                              <div class="price-value">
                                  <span class="price-unit">৳</span><span class="price-number">{{ $booking_category->booking_category_price }}</span><span class="price-per"></span>
                              </div>
                          </div>
                          <div class="price-table-rows">
                              <div class="price-table-row"><i class="fa fa-check-circle-o"></i> {{ $booking_category->people_capacity }} People Arrangement</div>
                              <div class="price-table-row "><i class="fa fa-check-circle-o"></i> <span style="font-weight: bold;">৳{{ $booking_category->per_person_cost }} Per Person </span></div>
                              <div class="price-table-row odd "><i class="fa fa-check-circle-o"></i> {{ $booking_category->decoration }}</div>
                              <div class="price-table-row"><i class="fa fa-check-circle-o"></i> {{ $booking_category->welcome_drink }}</div>
                              <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> {{ $booking_category->coffee }}</div>
                              <div class="price-table-row-bottom">
                                  <a class="btn btn-theme scroll-to" href="{{ route('with_category_id',$booking_category->id) }}">Register</a>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach

              </div>

              <!-- -->
              <hr class="page-divider line large"/>
              <!-- -->


              <!-- -->
              <hr class="page-divider line large"/>
              <!-- -->

          </section>
          <!-- /Content -->

          <hr class="page-divider transparent visible-xs"/>

          <!-- Sidebar -->
          <aside id="sidebar" class="sidebar col-sm-12 col-md-4 col-lg-3">

              <div class="widget google-map-widget">
                  <!-- Google map -->
                  <div class="google-map">
                      <div id="map-canvas"></div>
                  </div>
                  <!-- /Google map -->
                  <a href="#" class="link"><i class="fa fa-map-marker"></i> Go to LOCATION</a>
              </div>

              

          </aside>
          <!-- /Sidebar -->

      </div>
  </section>
  <!-- /PAGE -->
@endsection
