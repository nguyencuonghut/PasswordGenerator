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
                let CharacterSet_1 = 'ABCDEFGHIJKLMNOPQRSTUVWX';
                let CharacterSet_2 = 'abcdefghijklmnopqrstuvwxyz';
                let CharacterSet_3 = '0123456789';
                let CharacterSet_4 = '!@#$%&*';
                let password = '';
                for(let i = 0; i < 2; i++ ){
                    password += CharacterSet_1.charAt(Math.floor(Math.random() * CharacterSet_1.length));
                    password += CharacterSet_2.charAt(Math.floor(Math.random() * CharacterSet_2.length));
                    password += CharacterSet_3.charAt(Math.floor(Math.random() * CharacterSet_3.length));
                    password += CharacterSet_4.charAt(Math.floor(Math.random() * CharacterSet_4.length));
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
