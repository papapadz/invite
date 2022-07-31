<template>
<div class="d-flex align-items-center flex-column justify-content-center mx-auto">
  <b-card-group class="col-lg-6" columns>

    <b-card :header="item.title">
        <p>{{ item.description }}</p>
    </b-card>

    <b-card
      img-height="100"
      img-src="https://cdn.shopify.com/s/files/1/0390/3966/4260/products/mens-white-cotton-linen-lightweight-long-sleeve-shirt-tbmk05713-1_304x400_crop_center.jpg?v=1653562524"
      img-alt="Image"
      img-top
    >
      <b-card-title>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-circle" viewBox="0 0 16 16">
            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
        </svg> Top
      </b-card-title>
      <b-card-text>
        For your top, you will wear a 🥼 WHITE LONG SLEEVE POLO, can be a regular collar or a chinese collar, your choice, your style 👍
      </b-card-text>
    </b-card>

    <b-card
    img-height="100"
        img-src="https://cdn.shopify.com/s/files/1/2140/5321/products/Custom-Cotton-Dress-Pants-The-Lasalle-Khakee-1d.png?v=1510221711" img-alt="Image" img-top>
      <b-card-title>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-circle" viewBox="0 0 16 16">
            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
        </svg> Trunks
      </b-card-title>
      <b-card-text>
        The pants color will be KHAKI, light brown, whatever they call it. Pair them with your favorite brown shoes as well 🥾
      </b-card-text>
    </b-card>

    <b-card bg-variant="info" text-variant="white">
      <blockquote class="card-blockquote text-center">
        <h1>11.11.22</h1>
      </blockquote>
    </b-card>

    <b-card>
      <b-card-title>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-3-circle" viewBox="0 0 16 16">
            <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z"/>
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z"/>
            </svg> Bow Tie
      </b-card-title>
      <b-card-text>
        Don't forget your bow tie, any color will do ⧓ 👍
      </b-card-text>
    </b-card>

    <b-card :img-src="item.image" overlay></b-card>

    <b-card img-height="100" img-src="https://fenwickisland.delaware.gov/files/2022/02/Bonfire-Image.jpg" img-alt="Image" img-top>
      <b-card-text>
        The ceremony will be at Paoay Church, Paoay, Ilocos Norte ⛪️.
      </b-card-text>
      <b-card-text>
        Reception will follow at at Reo's Kaburburnayan Resort, Burgos, Ilocos Norte 👓 🏖.
      </b-card-text>
      <b-card-text>
        This is a <b-badge pill variant="primary">R</b-badge><b-badge pill variant="success">S</b-badge><b-badge pill variant="info">V</b-badge><b-badge pill variant="danger">P</b-badge> event
      </b-card-text>
      <b-card-text class="small text-muted">Invitation to Follow! 💌</b-card-text>
    </b-card>
  </b-card-group>
</div>
</template>

<script>
export default {
    created: function() {
        var self = this
        axios.post(this.config.url+'/assignment', {
            person:this.user.id
        }).then(function(response) {
            console.log(response.data)
            self.item = response.data.item
        })
    },
    data: function() {
        return {
            config: {
                url: this.$attrs.url
            },
            user: this.$attrs.user,
            item: {
                title: null,
                image: null,
                description: null
            },
            desc: null
        }
    }
}
</script>