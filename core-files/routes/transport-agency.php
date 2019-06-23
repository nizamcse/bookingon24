<?php
use Illuminate\Http\Request;

Route::group(['middleware'  => 'auth:agency'],function(){

    Route::get('/',[
        'uses'  => 'DashboardController@index',
        'as'    => 'ta-home'
    ]);

    /**
     * Partner Routes
     */

    Route::get('/partners',[
        'uses'  => 'PartnerController@index',
        'as'    => 'ta.partners'
    ]);

    Route::get('/partner/{id}',[
        'uses'  => 'PartnerController@show',
        'as'    => 'ta.partner.show'
    ]);

    Route::get('/create/partner',[
        'uses'  => 'PartnerController@create',
        'as'    => 'ta.get.partner.create'
    ]);

    Route::post('/create/partner',[
        'uses'  => 'PartnerController@store',
        'as'    => 'ta.post.partner.create'
    ]);

    /**
     * Buses Routes
     */

    Route::get('/buses',[
        'uses'  => 'BusController@index',
        'as'    => 'ta.buses'
    ]);

    Route::get('/bus/{id}',[
        'uses'  => 'BusController@show',
        'as'    => 'ta.bus.show'
    ]);

    Route::get('/create/bus',[
        'uses'  => 'BusController@create',
        'as'    => 'ta.get.bus.create'
    ]);

    Route::post('/create/bus',[
        'uses'  => 'BusController@store',
        'as'    => 'ta.post.bus.create'
    ]);

    Route::get('logout',[
        'uses'  => 'Auth\LoginController@logout',
        'as'    => 'agency-logout'
    ]);


    /**
     * Seat Layout Routes
     */

    Route::get('/seat-layouts',[
        'uses'  => 'SeatLayoutController@index',
        'as'    => 'ta.seat-layouts'
    ]);

    Route::get('/create/seat-layouts',[
        'uses'  => 'SeatLayoutController@create',
        'as'    => 'ta.get.seat-layout.create'
    ]);

    Route::post('/create/seat-layouts',[
        'uses'  => 'SeatLayoutController@store',
        'as'    => 'ta.post.seat-layout.create'
    ]);

    /**
     *Line
     */

    Route::get('/lines',[
        'uses'  => 'LineController@index',
        'as'    => 'ta.lines'
    ]);

    Route::get('create/line',[
        'uses'  => 'LineController@create',
        'as'    => 'ta.get.line.create'
    ]);

    Route::post('create/line',[
        'uses'  => 'LineController@store',
        'as'    => 'ta.post.line.create'
    ]);
    /**
     * Trip
     */

    Route::get('/trips',[
        'uses'  => 'TripController@index',
        'as'    => 'ta.trips'
    ]);

    Route::get('create/trip',[
        'uses'  => 'TripController@create',
        'as'    => 'ta.get.trip.create'
    ]);

    Route::post('create/trip',[
        'uses'  => 'TripController@store',
        'as'    => 'ta.post.trip.create'
    ]);

    /*
     * Book Ticket
     */

    Route::get('/book-ticket',[
        'uses'  => 'BusTicketBookingController@index',
        'as'    => 'ta.book-ticket'
    ]);

    Route::post('/book-ticket',[
        'uses'  => 'BusTicketBookingController@create',
        'as'    => 'ta.post.book-ticket'
    ]);

    Route::get('/book-ticket/payment',[
        'uses'  => 'BusTicketBookingController@create',
        'as'    => 'ta.get.book-ticket.payment'
    ]);


    /**
     * Search Available Trips
     */

    Route::get('/search/trip',function(Request $request){
        $ta_id = \Illuminate\Support\Facades\Auth::user()->transport_agency_id;
        $line = \App\Model\VehicleReservation\Line::where('departure_station',$request->from)
            ->where('arrival_station',$request->to)
            ->where('ta_id',$ta_id)->first();
        $trips = \App\Model\VehicleReservation\Trip::with(['bus.seatLayout','line.transportAgency'])->where('line_id',$line->id)->get();
        return $trips;

    });

});


Route::group(['middleware' => 'guest:agency'],function(){
    Route::get('/login',[
        'uses'  => 'Auth\LoginController@showLoginForm',
        'as'    => 'agency.login'
    ]);

    Route::post('/login',[
        'uses'  => 'Auth\LoginController@login',
        'as'    => 'post.agency.login'
    ]);
});

