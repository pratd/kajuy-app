<template>
    <v-card flat color="transparent">
        <v-subheader>Distance</v-subheader>
        <v-card-text class="pt-0">
            <v-slider
            v-model="value"
            :rules="rules"
            label="How Far ?"
            step="10"
            thumb-label="always"
            :max="40"
            ticks
            ></v-slider>
        </v-card-text>
    </v-card>
</template>
<script>
    export default {
        data () {
            return {
                value: 0,
                rules: [
                    v => v <= 38 || 'more than 40kms',
                ],
            }
        },
    }
</script>
Rules
