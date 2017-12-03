<template>
    <div id="contacts">
        <div class="row">
            <div class="col-md-6 hidden-xs">
                <card color="red"
                      icon="users"
                      title="Contacts"
                      :value="monthly_total"
                      chart="line"
                      chart-title="Past 6 Months"
                      :chart-labels="monthly_labels"
                      :chart-data="monthly_cdata"></card>
            </div>
            <div class="col-md-6 hidden-xs">
                <card color="blue"
                      icon="star"
                      title="Contacts"
                      :value="daily_total"
                      chart="line"
                      chart-title="Past 7 Days"
                      :chart-labels="daily_labels"
                      :chart-data="daily_cdata"></card>
            </div>
        </div>

        <h1 class="page-header padding-top">
            Manage Contacts <button class="btn btn-default"><i class="fa fa-plus"></i></button>
        </h1>

        <table class="table table-condensed">
            <thead>
                <tr>
                    <th><i class="fa fa-user"></i> Name</th>
                    <th><i class="fa fa-envelope"></i> Email</th>
                    <th><i class="fa fa-phone"></i> Primary Phone</th>
                    <th><i class="fa fa-cogs"></i> Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="contact in contacts">
                    <td>{{contact.name}}</td>
                    <td>{{contact.email}}</td>
                    <td>{{contact.primary_phone}}</td>
                    <td>
                        <button class="btn btn-default btn-xs"><i class="fa fa-envelope"></i></button>
                        <button class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    import Card from 'Components/Card.vue';

    export default {
        props: {
            contacts: {required: true},
            dailyData: {required: true},
            monthlyData: {required: true}
        },
        components: {
            Card
        },
        computed: {
            monthly_total() {
                return _.sum(Object.values(this.monthlyData));
            },
            monthly_labels() {
                return Object.keys(this.monthlyData);
            },
            monthly_cdata() {
                return Object.values(this.monthlyData);
            },
            daily_total() {
                return _.sum(Object.values(this.dailyData));
            },
            daily_labels() {
                return Object.keys(this.dailyData);
            },
            daily_cdata() {
                return Object.values(this.dailyData);
            }
        }
    }
</script>
<style lang="scss">
    .padding-top {
        padding-top: 50px;
    }
</style>