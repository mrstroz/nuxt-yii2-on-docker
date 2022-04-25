<!-- Please remove this file from your project -->
<template>
  <div>
    <b-container class="mt-5">
      <b-row>
        <b-col>
          <b-jumbotron>

            <h1>NUXT + YII2 application on DOCKER</h1>
            <p>This application is simple example of setup Nuxt as fronted and YII 2 as backed.</p>

            <b-form @submit.prevent="send">
              <b-form-group
                id="input-group-1"
                label="Email address:"
                label-for="input-1"
                description="We'll never share your email with anyone else."
              >
                <b-form-input
                  id="input-1"
                  v-model="form.email"
                  type="text"
                  placeholder="Enter email"
                ></b-form-input>
              </b-form-group>


              <b-button type="submit" variant="primary">Submit</b-button>
            </b-form>

          </b-jumbotron>

        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'NuxtTutorial',
  data() {
    return {
      form: {
        email: ''
      }
    }
  },
  methods: {
    send() {
      this.$axios.$get('/crawler')
    }
  }
}
</script>
