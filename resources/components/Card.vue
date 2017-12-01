<template>
    <div id="card">
        <div :class="['card', `card-${color}`]">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <div class="card-icon">
                        <i :class="['fa', `fa-${icon}`]"></i>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="pull-right">
                        <div class="card-value">
                            {{value}}
                        </div>

                        <div class="card-title">
                            {{title}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a :href="url">View {{title}} <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>

        <line-chart v-if="chart === 'line'" :data="chart_data" :options="chartOptions"></line-chart>
    </div>
</template>
<script>
    import LineChart from 'Components/LineChart.vue';

    export default {

        props: {
            color: {type: String, default: 'default'},
            icon: {type: String, default: 'users'},
            value: {type: String, default: '0'},
            title: {type: String, default: 'Users'},
            url: {type: String, default: '#'},

            chart: {type: String, default: null},

            chartColor: {type: String, default: null},
            chartBorderColor: {type: String, default: null},

            chartLabels: {
                type: Array,
                default() {
                    return ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
                }
            },
            chartData: {
                type: Array,
                default() {
                    return [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11]
                }
            },
            chartOptions: {
                type: Object,
                default() {
                    return {

                    }
                }
            },
        },
        components: {
            LineChart
        },
        data() {
            return {
                _chartColor: '',
                _chartBorderColor: ''
            }
        },
        computed: {
            chart_data() {
                return {
                    labels: this.chartLabels,
                    datasets: [
                        {
                            label: `${this.title} Per Month`,
                            backgroundColor: this._chartColor,
                            borderColor: this._chartBorderColor,
                            data: this.chartData
                        }
                    ]
                }
            },
            cardColor() {
                return $(`.card-${this.color}`).css('background-color');
            }
        },
        mounted() {
            if(!this.chartBorderColor) {
                this._chartBorderColor = this.cardColor;
            } else {
                this._chartBorderColor = this.chartBorderColor;
            }

            if(!this.chartColor) {
                this._chartColor = 'transparent';
            } else {
                this._chartColor = this.chartColor;
            }
        }
    }
</script>
<style lang="scss">
    $default: #373737;
    $red: #a31521;
    $blue: #33658A;
    $green: #2a852f;
    $yellow: #bab90f;
    $magenta: #ff00ff;
    $purple: #800080;

    .card {
        max-width: 400px;
        border: 1px solid transparent;
        font-size: 16px;
        box-shadow: 4px 4px 9px rgba(0, 0, 0, 0.4);

        .card-icon {
            font-size: 6em;
            padding-left: 15px;
        }

        .card-value {
            font-size: 4em;
            padding-right: 15px;
        }

        .card-title {
            font-weight: bold;
            font-size: 18px;
            padding-right: 15px;
            float: right;
        }

        .card-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 45px;
            width: 100%;

            a:hover {
                text-decoration: none;
                color: #fff !important;

                i {
                    padding-left: 5px;
                }
            }
        }

        &.card-default {
            border-color: $default;
            background-color: lighten($default, 25%);
            color: lighten($default, 60%);

            .card-icon {
                color: lighten($default, 40%);
            }

            .card-footer {
                background-color: lighten($default, 10%);
                a {color: lighten($default, 60%)}
            }

        }

        &.card-red {
            border-color: $red;
            background-color: lighten($red, 25%);
            color: lighten($red, 60%);

            .card-icon {
                color: lighten($red, 40%);
            }

            .card-footer {
                background-color: lighten($red, 10%);
                a {color: lighten($red, 60%)}
            }

        }

        &.card-blue {
            border-color: $blue;
            background-color: lighten($blue, 25%);
            color: lighten($blue, 60%);

            .card-icon {
                color: lighten($blue, 40%);
            }

            .card-footer {
                background-color: lighten($blue, 10%);
                a {color: lighten($blue, 60%)}
            }
        }

        &.card-green {
            border-color: $green;
            background-color: lighten($green, 25%);
            color: lighten($green, 60%);

            .card-icon {
                color: lighten($green, 40%);
            }

            .card-footer {
                background-color: lighten($green, 10%);
                a {color: lighten($green, 60%)}
            }
        }

        &.card-purple {
            border-color: $purple;
            background-color: lighten($purple, 15%);
            color: lighten($purple, 60%);

            .card-icon {
                color: lighten($purple, 30%);
            }

            .card-footer {
                background-color: lighten($purple, 10%);
                a {color: lighten($purple, 60%)}
            }
        }

        &.card-yellow {
            border-color: $yellow;
            background-color: lighten($yellow, 25%);
            color: lighten($yellow, 70%);

            .card-icon {
                color: lighten($yellow, 50%);
            }

            .card-footer {
                background-color: lighten($yellow, 10%);
                a {color: lighten($yellow, 70%)}
            }
        }
    }
</style>