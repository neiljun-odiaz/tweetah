<script>
    export default {
        props: ['tweets']
    }
</script>

<template>
    <div class="tweet-list">
        <ul class="list-group">
            <li v-for="tweet in tweets" class="list-group-item">{{ tweet.message }}</li>
        </ul>
    </div>
</template>
