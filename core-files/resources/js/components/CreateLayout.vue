<template>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="name">Label</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="row">Number Of Row</label>
                <input type="number" class="form-control" id="row" v-model="row" name="row">
            </div>
            <div class="form-group">
                <label for="column">Number Of Column</label>
                <input type="number" class="form-control" id="column" v-model="column" name="column">
            </div>
            <div class="form-group">
                <label for="totalSeat">Number Of Seat</label>
                <input type="number" class="form-control" id="totalSeat" name="number_of_seat">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block" type="button" v-on:click="generateLayout">GENERATE LAYOUT</button>
            </div>
        </div>
        <div class="col-md-7">
            <table class="table">
                <tr v-for="n in r">
                    <td v-for="i in c">
                        <input type="text" :name="'layouts['+ n +']['+ i +']'" style="width:50px">
                    </td>
                </tr>
            </table>
            <div class="form-group text-right mt-3" v-if="r && c">
                <button class="btn btn-primary" type="submit">SAVE</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                row: 0,
                column: 0,
                c: 0,
                r: 0,
            }
        },
        methods: {
            generateLayout: function(){
                this.c = parseInt(this.column);
                this.r = parseInt(this.row);
            }
        },
        mounted() {
            console.log('Create Layout Component mounted.')
        }
    }
</script>
