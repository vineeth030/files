<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Filename</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(activity, index) in activities">
            <td v-text="index+1"></td>
            <td v-text="activity.action"></td>
            <td v-text="activity.created_at"></td>
        </tr>
        </tbody>
    </table>
</template>

<script>
import {mapGetters} from 'vuex';
export default {
    name: "Activity",
    mounted(){
        this.$store.dispatch('GET_ACTIVITIES');
    },
    computed: {
        ...mapGetters([
            'activities'
        ])
    },
}
</script>

<style scoped>

</style>
