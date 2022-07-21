<template>
<div>
  <b-card
    img-alt="Image"
    :img-src="bgImage"
    img-top
    tag="article"
    class="m-5"
    style="max-width: 25rem;"
  >
    <b-card-text>
        <b-row>
            <b-col>
                <b-form-input
                    id="1"
                    v-model="code.one"
                    type="text"
                    required
                    maxlength="1"
                    class="code-input"
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
                    ></b-form-input>
            </b-col>
        </b-row>
    </b-card-text>

    <b-button class="w-100" href="#" variant="primary">Submit</b-button>
  </b-card>
</div>
</template>

<style>
.code-input {
    height: 5rem;
    font-size: 150%;
    font-weight: bold;
    text-align: center;
}
</style>

<script>

export default {
    data: function() {
        return {
            flag: 0,
            code: {
                one: '',
                two: '',
                three: '',
                four: '',
            },
            //bgImage: 'https://cf.shopee.ph/file/ba213310995ba0c057b0dbadbe35a483'
            bgImage: 'https://media.istockphoto.com/vectors/moustaches-and-top-hat-victorian-aristocrat-vector-id530920141?b=1&k=20&m=530920141&s=170667a&w=0&h=nLtAw4X3oULN1hgEhPWOZfqaAKLscVDS8sGDyz_yjuk='
        }
    }
}
</script>