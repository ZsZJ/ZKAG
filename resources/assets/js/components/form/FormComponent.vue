<template>

    <form method="post" action="">

        <!--CRSF TOKEN-->
        <input type="hidden" name="_token" v-model="this.$root.$data.crsf_token">

        <form-field v-for="field in form.fields" :key="field.id" :field="field" ></form-field>


    </form>

</template>

<script>

    import FormField from './FormField.vue';

    export default {

        components : { FormField },

        props : ['form'],

        data () {

        }
    }

</script>