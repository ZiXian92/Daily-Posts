<template>
  <div class="container-fluid">
    <h1>Sign Up for Daily Posts</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        <form v-on:submit.prevent="registerUser" class="form-horizontal">
          <div class="form-group">
            <label for="nameInput" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
              <input class="form-control" id="nameInput" v-model="name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="emailInput" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="emailInput" v-model="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="passwordInput" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="passwordInput" v-model="password" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password2Input" class="col-sm-2 control-label">Re-type Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password2Input" v-model="password_confirmation" required>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        errormsg: '',
        hasError: false
      }
    },
    methods: {
      registerUser: function() {
        if(this.password.length<8){
          this.errormsg = 'Password should be at least 8 characters long.';
          this.hasError = true;
          return false;
        }
        if(this.password!==this.password_confirmation){
          this.errormsg = 'The 2 passwords do not match!';
          this.hasError = true;
          return false;
        }
        let userData = {
          name: this.name,
          email: this.email,
          password: this.password,
          password_confirmation: this.password_confirmation
        };

        console.log(userData);

        // Send AJAX request

        // On success, go to login
        this.$router.push('/login');
      }
    }
  }
</script>

<style>

</style>
