<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4>TICKET BOOKING</h4>
            </div>
            <div class="card-body">
                <form v-on:submit.prevent="searchTrip">
                    <div class="row">
                        <div class="col-md-4">
                            <select name="departure_station" id="departure-station" class="form-control" v-model="departureStation" required>
                                <option value="">Select Departure Station</option>
                                <option v-for="location in stations" :value="location.id">{{ location.name }}</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="arrival_station" id="arrival_station-station" class="form-control" v-model="arrivalStation" required>
                                <option value="">Select Arrival Station</option>
                                <option v-for="location in stations" :value="location.id">{{ location.name }}</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" placeholder="Journey Date" v-model="journeyDate" required>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success" type="submit">SEARCH</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
            <th>BUS TYPE</th>
            <th>DEPARTURE TIME</th>
            <th>ARRIVAL TIME</th>
            <th>AVAILABLE SEAT</th>
            <th>FARE</th>
            </thead>
            <tbody>
                <template v-for="trip in trips">
                    <tr>
                        <td>
                            <p><strong>{{ trip.line.transport_agency.name }}</strong></p>
                            <p>{{ trip.bus.model }}</p>
                            <p>{{ trip.line.name }}</p>
                        </td>
                        <td>{{ trip.departure_time }}</td>
                        <td>{{ trip.arrival_time }}</td>
                        <td></td>
                        <td><button class="btn-sm btn-success" v-on:click="selectTrip(trip)">VIEW SEATS</button></td>
                    </tr>
                    <tr v-if="selectedTripId == trip.id">
                        <td colspan="2" class="border-right-0">
                            <table class="table">
                                <tr>
                                    <td colspan="2" class="border-right-0">Entry</td>
                                    <td :colspan="tripSeatLayout.total_column - 2" class="text-right border-left-0">Driver</td>
                                </tr>
                                <tr v-for="n in tripSeatLayout.total_row">
                                    <td v-for="i in tripSeatLayout.total_column" :class="selectedSeats.includes(tripSeatLayout.layout[n][i]) ? 'bg-danger' : ''">
                                        <button :class="tripSeatLayout.layout[n][i] ? '' : 'empty-cell'" v-on:click="selectSeat(tripSeatLayout.layout[n][i])">{{ tripSeatLayout.layout[n][i] }}</button>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="3" class="border-left-0" v-if="selectedSeats.length">
                            <form :action="appUrl + '/agency/book-ticket'" method="post">
                                <input type="hidden" name="_token" :value="token">
                                <input type="hidden" name="trip_id" :value="trip.id">
                                <table class="table">
                                <tr>
                                    <td>#SL</td>
                                    <td>SEAT</td>
                                    <td class="text-right">FARE</td>
                                </tr>
                                <tr v-for="(s,index) in selectedSeats">
                                    <td>{{ index+1 }}</td>
                                    <td>{{ s }} <input type="hidden" name="ticket_no[]" :value="s"></td>
                                    <td class="text-right">{{ ticketPrice }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Total Fare</td>
                                    <td class="text-right">{{ totalFare }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Customer Information</td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="form-group">
                                            <label for="customer-name">Customer Name</label>
                                            <input type="text" class="form-control" id="customer-name" name="customer_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer-phone">Customer Contact No</label>
                                            <input type="text" class="form-control" id="customer-phone" name="customer_contact_no">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer-email">Customer Email</label>
                                            <input type="email" class="form-control" id="customer-email" name="customer_email">
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Gender</label>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="gender" value="1">Male
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="gender">Female
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-success" type="submit">BOOK NOW</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </form>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        props: ['locations'],
        data: function(){
            return {
                departureStation: "",
                arrivalStation: "",
                journeyDate: "",
                stations: [],
                trips: [],
                selectedTripId: null,
                tripSeatLayout: null,
                selectedSeats: [],
                ticketPrice: 0,
                totalFare: 0,
                appUrl: "",
                token: "",
            }
        },
        methods: {
            searchTrip: function(){

                var app =this;
                axios.get('agency/search/trip',{
                    params: {
                        from: app.departureStation,
                        to: app.arrivalStation,
                        journeyDate: app.journeyDate
                    }
                })
                .then(response => {
                    app.trips = response.data;

                })
                .catch(e => {
                    console.log(e);
                });


            },
            selectTrip(trip){
                this.selectedTripId = trip.id;
                this.selectedTripTick = trip.id;
                this.tripSeatLayout = trip.bus.seat_layout;
                this.ticketPrice = trip.ticket_price;
            },
            selectSeat(seat){
                if(!this.selectedSeats.includes(seat)){
                    this.selectedSeats.push(seat);
                    this.totalFare = this.selectedSeats.length * this.ticketPrice;
                }else{
                    let i = this.selectedSeats.indexOf(seat);
                    i > -1 && i < this.selectedSeats.length ? this.selectedSeats.splice(i) : '';
                    this.totalFare = this.selectedSeats.length * this.ticketPrice;
                }
            }
        },
        created(){
            this.appUrl = document.head.querySelector('meta[name="base-url"]').content;
            this.token  = document.head.querySelector('meta[name="csrf-token"]').content;
        },
        mounted() {
            this.stations = JSON.parse(this.locations);
            console.log('Component mounted.');
        }
    }
</script>
