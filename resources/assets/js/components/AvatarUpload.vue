<template>
    <div>
        <div class="form-group" :class="{ 'has-error': errors[this.sendAs] }">
            <label :for="sendAs" class="control-label avatar_upload_form">+</label>
            <div v-if="uploading"><img src="/images/wait_big.gif"></div>
            <input id="image" v-else type="file" v-on:change="fileChange" :name="sendAs" accept="image/*" class="hidden">

            <div class="help-block text-danger" v-if="error">
                {{ errors.errors.image[0] }}
            </div>
        </div>

        <div v-if="avatar.path">
            <input type="hidden" name="avatar_id" :value="avatar.id">
            <img class="avatar" :src="avatar.path" alt="Current avatar">
            <br><br>
        </div>
    </div>
</template>

<script>
    import upload from '../mixins/upload'

    export default {
        props: [
            'currentAvatar'
        ],
        data () {
            return {
                errors: [],
                avatar: {
                    id: null,
                    path: this.currentAvatar,
                },
                error:false,
            }
        },
        mixins: [
            upload
        ],
        methods: {
            fileChange (e) {
                this.upload(e).then((response) => {
                    this.avatar = response.data.data
                    this.error = false
                }).catch((error) => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data
                        this.error = true
                        return
                    }

                    this.errors = 'Something went wrong. Try again.'
                })
            }
        }
    }
</script>
