<template>

    <div>

        <!--include a form if initialised-->
        <form-component v-if="form !== undefined" :form="form"></form-component>

    </div>

</template>

<script>

    import FormComponent from '../form/FormComponent.vue';

    export default {
        props : ['form'],
        components : {FormComponent},

        data () {

            return {


            }

        },
    }

</script>