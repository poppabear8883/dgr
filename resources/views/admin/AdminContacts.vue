<template>
    <div id="contacts">
        <div class="row">
            <div class="col-md-6 hidden-xs">
                <card color="red"
                      icon="users"
                      title="Total"
                      :value="total"
                      chart="line"></card>
            </div>
            <div class="col-md-6 hidden-xs">
                <card color="blue"
                      icon="star"
                      title="This Week"
                      :value="total_new"
                      chart="line"
                      :chart-labels="labels"
                      :chart-data="cdata"></card>
            </div>
        </div>

        <h1 class="page-header">
            Manage Contacts
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
            chartData: {required: true}
        },
        components: {
            Card
        },
        computed: {
            total() {
                return this.contacts.length;
            },
            total_new() {
                return _.sum(Object.values(this.chartData));
            },
            labels() {
                return Object.keys(this.chartData);
            },
            cdata() {
                return Object.values(this.chartData);
            }
        }
    }
</script>
<style lang="scss">
    .page-header {
        padding-top: 50px;
    }
</style>