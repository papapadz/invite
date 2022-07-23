<template>
<div>
  <b-card
    img-alt="Image"
    :img-src="config.bgImage"
    img-top
    tag="article"
    class="m-5"
    style="max-width: 35rem;"
  >
    <b-card-text>
        <div v-if="config.page==1">
            <b-row>
            <b-col>
                <b-form-input
                    id="1"
                    v-model="code.one"
                    type="text"
                    required
                    maxlength="1"
                    class="code-input"
                    :state="checkState"
                    ></b-form-input>
            </b-col>
            <b-col>
                <b-form-input
                    id="2"
                    v-model="code.two"
                    type="text"
                    required
                    maxlength="1"
                    class="code-input"
                    :state="checkState"
                    ></b-form-input>
            </b-col>
            <b-col>
                <b-form-input
                    id="3"
                    v-model="code.three"
                    type="text"
                    required
                    maxlength="1"
                    class="code-input"
                    :state="checkState"
                    ></b-form-input>
            </b-col>
            <b-col>
                <b-form-input
                    id="4"
                    v-model="code.four"
                    type="text"
                    required
                    maxlength="1"
                    class="code-input"
                    :state="checkState"
                    ></b-form-input>
            </b-col>
        </b-row>
        </div>
    </b-card-text>

    <b-button class="w-100" variant="primary" @click="login">Submit</b-button>
  </b-card>
</div>
</template>

<style>
.code-input {
    height: 5rem;
    font-size: 180%;
    font-weight: bold;
    text-align: center;
}
</style>

<script>

export default {
    computed: {
        checkState() {
            return this.code.state
        }
    },
    data: function() {
        return {
            code: {
                one: '',
                two: '',
                three: '',
                four: '',
                state: null
            },
            config: {
                bgImage: 'https://media.istockphoto.com/vectors/moustaches-and-top-hat-victorian-aristocrat-vector-id530920141?b=1&k=20&m=530920141&s=170667a&w=0&h=nLtAw4X3oULN1hgEhPWOZfqaAKLscVDS8sGDyz_yjuk=',
                url: this.$attrs.url,
                page: 1
            }
        }
    },
    methods: {
        login() {
            var self = this
            axios.post(this.config.url+'/login', {
                code:this.code.one+this.code.two+this.code.three+this.code.four
            }).then(function(response) {
                console.log(response.data)
                self.code.state = response.data.state
                if(response.data.state) {
                    self.config.bgImage = 'https://cf.shopee.ph/file/ba213310995ba0c057b0dbadbe35a483'
                }
          })
        }
    }
}
</script>