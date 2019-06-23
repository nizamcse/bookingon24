<template>
    <div>
        <input type="hidden" :name="inputName" v-model="departureTime">
        <time-picker v-model="time" format="HH:mm:ss" @change="setDepartureTime"></time-picker>
    </div>
</template>

<script>
    export default {
        props: ['input-name'],
        data: function(){
            return {
                time: {
                    HH: '00',
                    mm: '00',
                    ss: '00'
                },
                departureTime: '00:00:00',
            }
        },
        methods: {
            setDepartureTime: function(val){
                this.departureTime = this.time.HH+ ':' + this.time.mm + ':' + this.time.ss;
            }
        },
        mounted() {

        },
    }
</script>
