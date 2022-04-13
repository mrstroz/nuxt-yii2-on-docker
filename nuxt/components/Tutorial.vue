<!-- Please remove this file from your project -->
<template>
  <div>
    <b-container class="mt-2">
      <b-row>
        <b-col>
          <b-form-input v-model="text" placeholder="Enter your name"></b-form-input>
          <b-button variant="success" @click="send">Send</b-button>
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
      text: ''
    }
  },
  methods: {
    async send() {

      await this.$axios.$get('http://localhost:8000/crawler')
    }
  }
}
</script>
