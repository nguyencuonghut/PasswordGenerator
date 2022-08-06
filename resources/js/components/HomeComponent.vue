<template>
    <div class="w-50">
        <div class="input-group">
            <input v-model="password" type="text" class="form-control" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
            <div class="input-group-append">
                <button class="btn btn-dark" type="button" v-clipboard:copy="password" v-clipboard:success="onCopy" v-clipboard:error="onError"><i class="fa fa-clipboard"></i></button>
                <button class="btn btn-success" type="button" @click="generatePassword()"><i class="fa fa-refresh"></i></button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                password: 'Password của bạn',
            }
        },

        methods:{
            generatePassword(){
                let CharacterSet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*';
                let password = '';
                let size = 8;
                for(let i = 0; i < size; i++ ){
                    password += CharacterSet.charAt(Math.floor(Math.random() * CharacterSet.length));
                }
                this.password = password;
            },
            onCopy: function(e){
                toastr.success('Bạn vừa copy: ' + e.text);
            },
            onError: function(e){
                toastr.error('Copy lỗi!');
            },
        },

        mounted() {
            this.generatePassword();
        }
    }
</script>
