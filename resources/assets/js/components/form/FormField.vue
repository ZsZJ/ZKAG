<template>

    <div class="form-group">
        <input :type="field.type" :name="field.field_id" class="form-control" :placeholder="field.name">
    </div>

</template>

<script>

    export default {
        props : ['field']
    }

</script>