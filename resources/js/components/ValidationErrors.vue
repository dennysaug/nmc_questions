<template>
    <div class="alert alert-danger" role="alert" v-if="errors">
        Count:{{ Object.keys(errors).length }}
<!--        <ul v-for="(error, index) in errors" :key="index">-->
<!--            <li>{{ index.replace('_', ' ') }}: {{ Error[0] }}</li>-->
<!--        </ul>-->
    </div>
</template>

<script>
    export default {
        props: ["errors"],
    }
</script>

