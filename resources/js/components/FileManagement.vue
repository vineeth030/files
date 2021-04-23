<template>

    <div class="container">

        <files></files>
        
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a :class="{ active: filesTab}" class="nav-link" @click.prevent="filesTab = true;activityTab = false;" aria-current="page" href="#">Files</a>
            </li>
            <li class="nav-item">
                <a :class="{ active: activityTab}" class="nav-link" @click.prevent="filesTab = false;activityTab = true;" href="#">Activity</a>
            </li>
        </ul>

        <div v-show="filesTab" class="files-table">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Files</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div v-show="activityTab" class="activity-table">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Activity</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

</template>

<script>
export default {
    name: "FileManagement",
    data() {
        return {
            filesTab: true,
            activityTab: false
        }
    }
}
</script>

<style scoped>

</style>
