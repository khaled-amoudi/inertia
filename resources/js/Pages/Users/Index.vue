<template>
  <Head title="Users" />

  <div class="d-flex justify-content-between mb-6">
    <h2 class="text-3xl">Users</h2>

    <input
      v-model="search"
      type="text"
      placeholder="Search..."
      class="border px-2 mb-2"
    />
  </div>

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users.data" :key="user.id">
        <th>{{ user.name }}</th>
        <td>{{ user.email }}</td>
        <td>
          <Link :href="`/users/${user.id}/edit`"> Edit </Link>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-between mb-6">
    <Pagination :links="users.links" class="mt-6" />

    <div>
      <Link :href="`/users/create`" class="btn btn-dark mx-2" as="button">
        Create User
      </Link>

      <Link
        :href="`/users/createByFormHelper`"
        class="btn btn-dark"
        as="button"
      >
        Create User By Form Helper
      </Link>
    </div>
  </div>
</template>

<script>
import Pagination from "../../Shared/Pagination";

// to import throttle you shoud first install lodash dependencies using this command
//     => npm install lodash --save-dev
// import throttle from "lodash/throttle"; // (throttle) send request after every specific period of time e.g. 300ms
import { debounce } from "lodash"; // (debounce) send request after period of time after finish of typing

export default {
  components: { Pagination },

  props: {
    users: Object,
    filters: Object,
  },

  data() {
    return {
      search: this.filters.search,
    };
  },

  watch: {
    search: debounce(function (value) {
      this.$inertia.get(
        "/users",
        { search: value },
        { preserveState: true, replace: true }
      );
    }, 300),
  },
};
</script>
