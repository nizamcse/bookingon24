<template>
    <div>
        <div class="accordion" id="accordionSeatLayout">
            <div class="card" v-for="(seatLayout,li) in seatLayouts">
                <div class="card-header" :id="'seatLayoutHeading' + seatLayout.id">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" :data-target="'#seatLayoutCollapse' + seatLayout.id" aria-expanded="false" :aria-controls="'seatLayoutCollapse' + seatLayout.id">
                            SL#{{ li+1 }} &nbsp; {{ seatLayout.name }}
                        </button>
                    </h5>
                </div>
                <div :id="'seatLayoutCollapse' + seatLayout.id" class="collapse" :aria-labelledby="'seatLayoutHeading' + seatLayout.id" data-parent="#accordionSeatLayout">
                    <div class="card-body">
                        <div v-if="windowWidth > 767">
                            <table class="table">
                                <tr v-for="n in seatLayout.total_column">
                                    <td v-for="i in seatLayout.total_row">
                                        <button :class="seatLayout.layout[n][i] ? '' : 'empty-cell'">{{ seatLayout.layout[i][n] }}</button>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div v-else>
                            <table class="table">
                                <tr>
                                    <td colspan="2">Entry</td>
                                    <td :colspan="seatLayout.total_column - 2" class="text-right">Driver</td>
                                </tr>
                                <tr v-for="n in seatLayout.total_row">
                                    <td v-for="i in seatLayout.total_column">
                                        <button :class="seatLayout.layout[n][i] ? '' : 'empty-cell'">{{ seatLayout.layout[n][i] }}</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['layouts'],
        data: function(){
            return {
                windowWidth: 0,
                windowHeight: 0,
                seatLayouts: [],
            }
        },
        methods: {
            getWindowWidth(event) {
                this.windowWidth = document.documentElement.clientWidth;
            },

            getWindowHeight(event) {
                this.windowHeight = document.documentElement.clientHeight;
            }
        },
        mounted() {
            this.$nextTick(function() {
                window.addEventListener('resize', this.getWindowWidth);
                window.addEventListener('resize', this.getWindowHeight);
                this.getWindowWidth();
                this.getWindowHeight();
            });
            this.seatLayouts = JSON.parse(this.layouts);
        },
        beforeDestroy() {
            window.removeEventListener('resize', this.getWindowWidth);
            window.removeEventListener('resize', this.getWindowHeight);
        }
    }
</script>
