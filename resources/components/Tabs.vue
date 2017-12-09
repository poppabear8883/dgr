<template>
    <div id="tabs">
        <ul class="nav nav-tabs">
            <li v-for="(tab, index) in tabs" :class="active === index ? 'active' : ''">
                <a href="#" @click.prevent="active = index">{{tab}}</a>
            </li>
        </ul>

        <div v-for="(tab, index) in tabs" v-if="index === active">
            <slot :name="tab">
                <h1>Default content for {{tab}}</h1>
                <p>Hint:</p>
                <div class="well" v-text='`<div :slot="${tab}">Custom content for ${tab} goes here !!</div>`'></div>
            </slot>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            tabs: {
                type: Array,
                default() {
                    return ['Tab1', 'Tab2']
                }
            }
        },
        data() {
            return {
                active: 0
            }
        }
    }
</script>
<style lang="scss">

</style>