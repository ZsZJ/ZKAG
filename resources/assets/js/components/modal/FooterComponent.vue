<template>

    <div>
        <slot name="footer">
            <button class="btn btn-default" v-on:click="$emit('close')">
                Sluiten
            </button>
            <button class="btn btn-primary">
                Opslaan
            </button>
        </slot>
    </div>

</template>

<script>
    export default {

    }
</script>