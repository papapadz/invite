<template>
<div>
    <b-overlay :show="show" class="d-inline-block">
    <b-card v-if="config.page==1" 
        img-src="https://www.pngkit.com/png/detail/207-2076842_email-icon-blue-png.png"
        img-top
        tag="article"
        class="m-5"
        style="max-width: 35rem;"
    >
        <b-card-text>
            <div>
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
    <div v-if="config.page==2" class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                    </svg></div>
                    <p class="mb-0 mt-2 font-italic">
                        {{ user.assignment.message }}
                    </p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top"> Ben & Steff
                        <div class="float-right" v-if="buttons.show">
                            <b-button pill @click="buttonClick(true)" variant="success">Sure, I'll be there</b-button>
                            <b-button pill @click="buttonClick(false)" variant="danger">Sorry, I can't make it</b-button>
                        </div>
                    </footer>
                </blockquote><!-- END -->
    </div>
    </b-overlay>
    <Details :url="config.url" :user="user" v-if="config.page==3"></Details>
</div>
</template>

<style>
.code-input {
    height: 5rem;
    font-size: 180%;
    font-weight: bold;
    text-align: center;
}
.blockquote-custom {
  position: relative;
  font-size: 1.1rem;
}

.blockquote-custom-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 50px;
}
</style>

<script>
import Details from './Details.vue'

export default {
    components: {
        Details
    },
    mounted: function() {
        self = this
        setTimeout(function(){
            self.show = false         
        }, 3000);
    },
    computed: {
        checkState() {
            return this.code.state
        },
        greetings() {
            return "Hi, "+this.user.nickname+"!"
        }
    },
    data: function() {
        return {
            images: {
                one: 'https://cf.shopee.ph/file/ba213310995ba0c057b0dbadbe35a483'
            },
            code: {
                one: '',
                two: '',
                three: '',
                four: '',
                state: null
            },
            config: {
                bgImage: 'https://www.pngkit.com/png/detail/207-2076842_email-icon-blue-png.png',
                url: this.$attrs.url,
                page: 1
            },
            buttons: {
                show: false
            },
            person: null,
            message: null,
            show: true
        }
    },
    methods: {
        login() {
            var self = this
            axios.post(this.config.url+'/login', {
                code:this.code.one+this.code.two+this.code.three+this.code.four
            }).then(function(response) {
                self.code.state = response.data.state
                if(response.data.state) {
                    self.config.bgImage = self.images.one
                    self.config.page = 2
                    self.user = response.data.user
                    setTimeout(function() {
                        self.buttons.show = true
                    }, 3000)
                }
            })
        },
        buttonClick(answer) {
            if(answer)
                this.config.page = 3
        }
    }
}
</script>