<template>

    <div class="modal-mask py-5">

        <div class="modal-wrapper mx-auto">

            <div class="modal-container w-50">

                <!-- Header object is filled-->
                <div is="header-component" class="modal-header border-0">
                    <h3 slot="title"> {{ modal.header.title }} </h3>
                </div>

                <div is="body-component" :form="form" class="modal-body"></div>

                <div is="footer-component" class="modal-footer border-0"></div>

            </div>

        </div>

    </div>

</template>

<script>

    import HeaderComponent from './HeaderComponent.vue';
    import BodyComponent from './BodyComponent.vue';
    import FooterComponent from './FooterComponent.vue';

    export default {

        components : { HeaderComponent, BodyComponent, FooterComponent },

        props : ['modal', 'form'],

        data () {
            return {

            }
        },

        mounted () {

        }

    }

</script>


<style scoped>

    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }

    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }

    .modal-container {
        margin: 0px auto;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .3s ease;
        font-family: Helvetica, Arial, sans-serif;
    }

    .modal-default-button {
        float: right;
    }

    .modal-enter {
        opacity: 0;
    }
    .modal-leave-active {
        opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .simple-root {
        margin-top: 20%;
        margin-left: auto;
        margin-right: auto;
    }

    .help.is-danger {
        color: #e74c3c;
    }

    .form-control.is-danger {
        border: 1px solid #e74c3c;
    }

</style>