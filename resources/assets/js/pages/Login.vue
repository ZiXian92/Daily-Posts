<template>
  <div class="container-fluid">
    <h1>Login</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal" v-on:submit.prevent="login">
          <div class="form-group">
            <label for="emailInput" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" id="emailInput" class="form-control" v-model="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="passwordInput" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" id="passwordInput" class="form-control" v-model="password" required>
            </div>
          </div>
          <div class="row text-center">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
        <br>
        <div class="alert alert-danger" v-if="hasError">{{ errormsg }}</div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        email: '',
        password: '',
        hasError: false,
        errormsg: ''
      }
    },
    methods: {
      login: function(){
        this.$http.post('/login', { email: this.email, password: this.password }, {
          headers: {
            'Content-Type': 'application/json'
          }
        })
        .then(response => {
          console.log(response)
          console.log('Login successful')
        }, response => {
          console.log(response)
          switch(response.status){
            case 401: this.errormsg = 'Incorrect email/password.'
              break
            case 403: this.errormsg = 'Too many incorrect login attempts. Please try again later.'
              break
            default: this.errormsg = 'An unexpected error occurred'
              break
          }
          this.hasError = true
        })
      }
    }
  }
</script>

<style>

</style>
