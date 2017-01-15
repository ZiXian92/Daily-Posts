<template>
  <div class="container-fluid">
    <div class="jumbotron text-center">
      <h1>Daily Posts</h1>
      <p>Share your day with a quick post.</p>
      <p>Daily posts helps you get intot he habit of reflecting on your day with just 1 succinct post a day! Just like how you use Twitter.</p>
      <div class="row">
        <router-link to="/register">
          <button type="button" class="btn btn-success">Get started</button>
        </router-link>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4" v-for="feature in features">
        <h3>{{ feature.content }}</h3>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        features: [{
          content: 'Post a quick thought or the most significant thing of the day.'
        }, {
          content: 'Follow your friends to keep up-to-date with how they are doing.'
        }, {
          content: 'Get into the habit of keeping a diary: Only 1 post a day!'
        }]
      };
    }
  }
</script>

<style>

</style>
