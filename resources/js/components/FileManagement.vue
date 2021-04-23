<template>

    <div class="container">

        <h1>File Management</h1>

        <form class="row row-cols-lg-auto g-3 align-items-center float-end">
            <div class="col-12">
                <input type="file" ref="fileupload" @change="selectFile" :class="{'is-invalid': error}" class="form-control" id="fileUpload" placeholder="Upload new file">
                <div v-show="error" v-text="error" id="fileUploadFeedback" class="invalid-feedback"></div>
            </div>
            <div class="col-12">
                <button type="button" @click.prevent="uploadFile()" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a :class="{ active: filesTab}" class="nav-link" @click.prevent="filesTab = true;activityTab = false;" aria-current="page" href="#">Files</a>
            </li>
            <li class="nav-item">
                <a :class="{ active: activityTab}" class="nav-link" @click.prevent="filesTab = false;activityTab = true;" href="#">Activity</a>
            </li>
        </ul>

        <div v-show="filesTab" class="files-table">
            <files></files>
        </div>

        <div v-show="activityTab" class="activity-table">
            <activity></activity>
        </div>

    </div>

</template>

<script>
import {mapGetters} from 'vuex';
export default {
    name: "FileManagement",
    data() {
        return {
            filesTab: true,
            activityTab: false,
            file: null
        }
    },
    computed: {
        ...mapGetters([
            'error'
        ])
    },
    methods: {
        selectFile(event) {
            this.file = event.target.files[0];
            console.log('Filess: ', event.target.files[0]);
        },
        uploadFile(){
            const newFile = new FormData();
            newFile.append('file', this.file);
            this.$store.dispatch('ADD_FILE', newFile);
            this.$refs.fileupload.value = null;
        },
    }
}
</script>

<style scoped>
.nav.nav-tabs{
    margin-top: 50px;
}
</style>
