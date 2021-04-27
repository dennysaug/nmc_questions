<template>
    <div class="card">
        <h5 class="card-header">QUESTION</h5>
        <div class="card-body">
            <h5 class="card-title">Showing the question(s)</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <success v-if="success_msg"></success>
            <div v-if="loading">
                <p>Loading data...</p>
            </div>
            <div v-else>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item,key) in data" :key="key">
                        <th scope="row">{{ item.id}}</th>
                        <td>{{ item.title}}</td>
                        <td>{{ item.created_at}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>

<script>

</script>

<style scoped>

</style>


<script>
export default {
    data() {
        return {
            success_msg: "",
            loading: false,
            data: []
        }
    },
    created() {
        this.success_msg = localStorage.getItem('success_msg');
        localStorage.setItem('success_msg', null);
        axios.get('/api/question').
            then(response => this.data = response.data)
            .then(() => (this.loading = false))
    }

}
</script>

<style scoped>

</style>
