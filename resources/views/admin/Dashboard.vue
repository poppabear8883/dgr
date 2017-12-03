<template>
    <div class="row">
        <div class="col-md-4 hidden-xs">
            <card color="red"
                  icon="users"
                  title="Contacts"
                  url="/admin/contacts"
                  value="65"
                  chart="line"></card>
        </div>
        <div class="col-md-4 hidden-xs">
            <card color="blue"
                  icon="globe"
                  title="Visitors"
                  url="/admin/visitors"
                  value="120"
                  chart="line"></card>
        </div>
        <div class="col-md-4 hidden-xs">
            <card color="purple"
                  icon="comments"
                  title="Reviews"
                  url="/admin/reviews"
                  value="40"
                  chart="line"></card>
        </div>
    </div>
</template>
<script>
    import Card from 'Components/Card.vue';

    export default {
        components: {
            Card
        }
    }
</script>