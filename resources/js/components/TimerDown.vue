<template>
    <div class="row">
        <div class="col-md-6 col-sm-12 mx-auto">
            <div class="card text-center text-white">
                <img src="/img/background.jpg" class="card-img img-fluid img-thumbnail" alt="">
                <div class="card-img-overlay d-flex">
                    <div class="my-auto mx-auto text-center">
                        <h1 class="pb-2 font-weight-bold">LOT STARTED IN</h1>
                        <vue-countdown ref="countdown" :time="timer" v-slot="{ hours, minutes, seconds }">
                            <div class="row">
                                <div class="col-4 p-0">
                                    <div class="bg-info mx-1">
                                        <button type="button" class="btn btn-primary my-2">
                                            <span class="text-white display-1">{{ hours }}</span>
                                        </button>
                                        <div class="progress" :style="{ height: 2+'px',}">
                                            <div class="progress-bar" role="progressbar" :style="{ width: (minutes+hours*60)/60*100+'%',}" :aria-valuenow="hours*minutes" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="h3">Hours</span>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <div class="bg-info mx-1">
                                        <button type="button" class="btn btn-primary my-2">
                                            <span class="text-white display-1">{{ minutes }}</span>
                                        </button>
                                        <div class="progress" :style="{ height: 2+'px',}">
                                            <div class="progress-bar" role="progressbar" :style="{ width: minutes/60*100+'%',}" :aria-valuenow="minutes" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="h3">Minutes</span>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <div class="bg-info mx-1">
                                        <button type="button" class="btn btn-primary my-2">
                                            <span class="text-white display-1">{{ seconds }}</span>
                                        </button>
                                        <div class="progress" :style="{ height: 2+'px',}">
                                            <div class="progress-bar" role="progressbar" :style="{ width: seconds/60*100+'%',}" :aria-valuenow="seconds" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="h3">Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </vue-countdown>
                        <div class="card-body my-3 bg-black bg-opacity-50">
                            <div class="">
                                <h3 class="card-title">Auction Type:</h3>
                                <h1 class="card-title font-weight-bold">Fast Auction</h1>
                            </div>
                            <div class="">
                                <h3 class="card-title">DOWN PAYMENT:</h3>
                                <h1 class="card-title font-weight-bold">000 SAR <strong class="text-success">PAID</strong>/<strong class="text-danger">PAID</strong></h1>
                            </div>
                        </div>

                        <p class="card-text">1. Terms and Conditions Terms and Conditions Terms and Conditions Terms and Conditions</p>
                        <p class="card-text">2. Terms and Conditions Terms and Conditions Terms and Conditions</p>
                        <button type="button" class="btn btn-primary" @click="restart">Restart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</template>

<script>
    export default {
        data(){
            return{
                timer: 6025*1000
            }
        },
        methods: {
            restart(){
                this.$refs.countdown.restart();
            }
        }
    }
</script>