@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Track My Order') }}</h3>
                    <p>My store location: (25.286106, 51.534817)</p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="track-my-order">
                        <form action="{{route('track-my-order') }}" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="radius">Radius (km)</label>
                                    <input class="form-control{{ $errors->has('radius') ? ' is-invalid' : '' }} search-input" name="radius" id="radius" type="number" placeholder="{{ __('') }}" value="{{ request('radius') ? request('radius') : 0 }}" autocomplete="off" />
                                    <small id="radiusHelp" class="form-text text-muted">(Type 0 for all)</small>
                                </div>
                                <div class="col-md-4">
                                    <label for="from">From</label>
                                    <input class="form-control{{ $errors->has('from') ? ' is-invalid' : '' }} search-input datepicker" name="from" id="from" type="text" placeholder="{{ __('') }}" value="{{ old('from') ??request('from')}}" autocomplete="off" />
                                </div>
                                <div class="col-md-4">
                                    <label for="to">To</label>
                                    <input class="form-control{{ $errors->has('to') ? ' is-invalid' : '' }} search-input datepicker" name="to" id="to" type="text" placeholder="{{ __('') }}" value="{{ old('to') ??request('to')}}" autocomplete="off" />
                                </div>
                            </div>
                            <br clear="all"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <button name="search" type="submit" class="btn btn-primary pull-right btn-full">{{ __('Filter') }}</button>
                                </div>
                                <div class="col-md-6">
                                    <a type="button" href="{{ route('track-my-order') }}" id="clear-search-form" class="btn btn-primary pull-right btn-full">{{ __('Clear') }}</a>
                                </div>
                            </div>
                        </form>
                        <div id="map"></div>

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Distance</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (isset($orders) && !empty($orders))
                                    @foreach ($orders as $key => $order)
                                    <tr>
                                      <th scope="row">{{$order->id}}</th>
                                      <td>{{$order->amount}}</td>
                                      <td>{{date("Y-m-d", strtotime($order->date))}}</td>
                                      <td>{{round($order->distance/1000,3)}}km</td>
                                      <td>{{ucfirst($order->status)}}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                          </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});
// Initialize and add the map
function initMap(){
    // Map options
    var options = {
        zoom:10,
        center:{lat:25.286106,lng:51.534817}
    }

    // New map
    var map = new google.maps.Map(document.getElementById('map'), options);

    // Listen for click on map
    google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
    });

    // Array of markers
    var markers = [
    @if (isset($orders) && !empty($orders))
        @foreach ($orders as $key => $order)
        {
            coords:{lat:{{$order->latitude}},lng:{{$order->longitude}}},
            content:'<h3>Order ID: {{$order->id}}</h3><p>Order Amount: {{$order->amount}}</p><p>Order Date: {{date("Y-m-d", strtotime($order->date))}}</p><p>Distance: {{round($order->distance/1000,3)}}km</p>'
        }@if ($key < count($orders)-1 ),@endif
        @endforeach
    @endif
    ];

    // Loop through markers
    for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
    }

    // Add Marker Function
    function addMarker(props){
    var marker = new google.maps.Marker({
        position:props.coords,
        map:map,
        //icon:props.iconImage
    });

    // Check for customicon
    if(props.iconImage){
        // Set icon image
        marker.setIcon(props.iconImage);
    }

    // Check content
    if(props.content){
        var infoWindow = new google.maps.InfoWindow({
        content:props.content
        });

        marker.addListener('click', function(){
        infoWindow.open(map, marker);
        });
    }
    }
}
window.initMap = initMap;
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}&callback=initMap&v=weekly" defer></script>
@endsection
