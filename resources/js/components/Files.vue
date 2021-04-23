<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Filename</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(file, index) in files">
            <td v-text="index+1"></td>
            <td v-text="file"></td>
            <td><button @click="deleteFile(file)">Delete</button></td>
        </tr>
        </tbody>
    </table>
</template>

<script>
import {mapGetters} from 'vuex';
export default {
    name: "Files",
    data() {
        return {
            searchQuery: ""
        }
    },
    mounted(){
        this.$store.dispatch('GET_FILES');
    },
    computed: {
        ...mapGetters([
            'files'
        ]),
        /*filteredFiles: function (){
            return this.files.filter(file => {
                return file.name.toLowerCase().includes(this.searchQuery.toLowerCase())
            })
        }*/
    },
    methods: {
        deleteFile(file){
            console.log('working!!!!')
            this.$store.dispatch('REMOVE_FILE', file);
        },
        searchFiles(){
            console.log('Searching files....');

        }
    }
}
</script>

<style scoped>

</style>
