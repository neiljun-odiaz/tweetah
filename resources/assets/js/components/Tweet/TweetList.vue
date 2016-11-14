<script>
    export default {
        props: ['tweets'],
        data() {
            tweets: [{
                id: Math.floor(Date.now()),
                message: 'First tweet here',
                user_id: 1,
                create_at: Date.now(),
                updated_at: Date.now()
            }]
        }
    }
</script>

<template>
    <ul>
        <li v-for="tweet in tweets">
            {{ tweet.message }}
        </li>
    </ul>
</template>
