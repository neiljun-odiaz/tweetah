<script>
    export default {
        props: ['my-message'],
        data() {
            return {
                parentMsg: ''
            }
        }
    }
</script>

<template>
    <div>
        <span>{{ parentMsg }}</span>
    </div>
</template>
