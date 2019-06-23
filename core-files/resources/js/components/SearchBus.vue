<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Search Available Buses</div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="from">From</label>
                                <input type="text" class="form-control" name="from" id="from" autocomplete="off" v-model="fromLocationSearchedtext" v-on:keyup="searchLocationOnName('from')" v-on:blur="hideList('from')">
                                <ul v-if="fromLocations.length">
                                    <li v-for="(location,index) in fromLocations" v-on:click="selectLocation(location,'from')">{{ location.name }}</li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label for="to">To</label>
                                <input type="text" class="form-control" name="to" id="to" autocomplete="off" v-model="toLocationSearchedtext" v-on:keyup="searchLocationOnName('to')" v-on:blur="hideList('to')">
                                <ul v-if="toLocations.length">
                                    <li v-for="(location,index) in toLocations" v-on:click="selectLocation(location,'to')">{{ location.name }}</li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="position: relative">
                                        <label for="journey-date">Journey Date</label>
                                        <input type="date" class="form-control" name="journey_date" id="journey-date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="return-date">Return Date</label>
                                        <input type="date" class="form-control" name="return_date" id="return-date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bus-company">Bus Company</label>
                                <select name="bus_company_id" id="bus-company" class="form-control">
                                    <option value="">Select Bus Company</option>
                                    <option v-for="busCompany in busCompanies" value="buscompany.id">{{ busCompany.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-success">SEARCH</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                locations: [
                    {
                        id: 1,
                        name: 'Dhaka',
                    },
                    {
                        id: 2,
                        name: 'Sylhet'
                    },
                    {
                        id: 3,
                        name: 'Chittagong'
                    },
                    {
                        id: 4,
                        name: 'Khulna'
                    },
                    {
                        id: 5,
                        name: 'Rajshahi'
                    },
                ],
                fromLocations: [],
                busCompanies: [
                    {id: 1,name: 'Hanif Paribahan'},
                    {id: 2,name: 'Shamoly Paribahan'},
                    {id: 3,name: 'Unique Paribahan'},
                    {id: 4,name: 'Greenline Paribahan'}
                ],
                busCompanyRoutes: [
                    {
                        id: 1,
                        companyId: 1,
                        from: 'Dhaka',
                        to: 'Khulna'
                    },
                    {
                        id: 1,
                        companyId: 1,
                        from: 'Dhaka',
                        to: 'Khulna'
                    }
                ],
                toLocations: [],
                fromLocationSearchedtext: "",
                toLocationSearchedtext: "",
                showFromLocationFalse: false,
                showToLocationList: false,

            };
        },
        methods: {
            selectLocation(location,locationType){
                if(locationType == 'from'){
                    this.fromLocationSearchedtext = location.name;
                }
                else if(locationType == 'to'){
                    this.toLocationSearchedtext = location.name;
                }
            },
            hideList(locationType){
                if(locationType == 'from'){
                    var app = this;
                    setTimeout(function(){
                        app.fromLocations = [];
                    },450)
                }
                else if(locationType == 'to'){
                    var app = this;
                    setTimeout(function(){
                        app.toLocations = [];
                    },450)
                }
            },
            searchLocationOnName(locationType){
                var app = this;
                if(locationType == 'from'){
                    if(this.fromLocationSearchedtext.length){
                        this.fromLocations = this.locations.filter((location) => {
                            return location.name.toUpperCase().search(app.fromLocationSearchedtext.toUpperCase()) != -1;
                        });
                    }else{
                        this.fromLocations = [];
                    }
                }
                else if(locationType == 'to'){
                    if(this.toLocationSearchedtext.length){
                        this.toLocations = this.locations.filter((location) => {
                            return location.name.toUpperCase().search(app.toLocationSearchedtext.toUpperCase()) != -1;
                        });
                    }else{
                        this.toLocations = [];
                    }
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
