<template lang="en">
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container d-flex justify-content-between">
    <a class="navbar-brand fw-bold">My App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">

        <span class="text-white text-secondary text-small ms-5">
            welcome again {{ $page.props.userdata.fname }}
        </span>


      <ul class="navbar-nav">
            <!-- Active Link
            :class="{'fw-bold border-1 p-2': $page.url == '/users'}"
            :class="{'fw-bold border-1 p-2': $page.url.startsWith('/users')}"
            :class="{'fw-bold border-1 p-2': $page.component == 'Users'}"
            -->

            <li class="nav-link"><Link href="/" class="nav-link" :class="{'fw-bold text-primary': $page.component == 'Home'}">Home</Link></li>
            <li class="nav-link"><Link href="/users" class="nav-link" :class="{'fw-bold text-primary': $page.component == 'Users'}">Users</Link></li>
            <li class="nav-link"><Link href="/settings" class="nav-link" :class="{'fw-bold text-primary': $page.component == 'Settings'}">Settings</Link></li>
            <li class="nav-link"><Link href="/test" class="nav-link py-0 mt-2 border-start" :class="{'fw-bold': $page.component == 'Test'}">Test</Link></li>
            <li class="nav-link"><Link href="/logout" class="btn btn-primary" method="post" :data="{ foo: 'khlaed'}" as="button">Logout</Link></li>
      </ul>
    </div>
  </div>
</nav>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    Link,
  },

  /* this way used when the [ shared data ] will be used alot in this page */
  //   computed: {
  //     username() {
  //         return this.$page.props.userdata.fname;
  //     }
  //   }
};
</script>
<style lang=""></style>
