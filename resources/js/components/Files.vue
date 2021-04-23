<template>
    <div>
        <form class="row search-box row-cols-lg-auto align-items-center float-start">
            <div class="col-6">
                <input type="text" v-model="searchQuery" class="form-control" id="searchFile" placeholder="Search file">
            </div>
        </form>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Filename</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(file, index) in filteredFiles">
                <td v-text="index+1"></td>
                <td v-text="file"></td>
                <td><button @click="deleteFile(file)">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>

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
        filteredFiles: function (){
            return this.files.filter(file => {
                return file.toLowerCase().includes(this.searchQuery.toLowerCase())
            })
        },
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
.search-box{
    margin-top: 20px;
}
</style>
