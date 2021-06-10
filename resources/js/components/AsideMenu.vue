<template>
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile" style="box-shadow: 0px 0px 32px blue;">
      <nav class="menu">
      <div class="main">
        <ul class="menu-list">
          <p class="menu-label title">
            General
          </p>
          <li><a class="name" href="#dashboard">Dashboard <i class="far fa-chart-bar"></i></a></li>
          <li><a class="name" href="#profile">Profile&nbsp;<i class="fas fa-user"></i></a></li>
          <li><a class="name" href="#settings">Settings&nbsp;<i class="fas fa-cog"></i></a></li>
          <li>
            <a :href="route" style="color:red;"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <!--{{ __('Logout') }}-->Logout
            <i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="logout" method="POST" class="d-none">
              <input type="hidden" name="_token" v-bind:value="csrf">
            </form>
          </li>
          <p class="menu-label title">
            Additional Links
          </p>
          <li>
            <a class="has-submenu name">List 1</a>
            <ul class="submenu-list">
              <li><a class="name" href="">Link 1</a></li>
              <li><a class="name" href="">Link 2</a></li>
              <li><a class="name" href="">Link 3</a></li>
            </ul>
          </li>
          <li>
            <a class="has-submenu name">List 2</a>
            <ul class="submenu-list">
              <li><a class="name" href="">Link 1</a></li>
              <li><a class="name" href="">Link 2</a></li>
              <li><a class="name" href="">Link 3</a></li>
            </ul>
          </li>
          <li>
            <a class="has-submenu name">List 3</a>
            <ul class="submenu-list">
              <li><a class="name" href="">Link 1</a></li>
              <li><a class="name" href="">Link 2</a></li>
              <li><a class="name" href="">Link 3</a></li>
            </ul>
          </li>
        </ul>
      </div>
      </nav>
    </aside>
</template>
<script>
export default {
  mounted(){
      console.log("aside menu mounted");
  },
  data() {
		logout: "{{ route('logout') }}"
    return {
			isActive: false,
			csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }
  },
  methods: {
    burgerToggle(){
      this.isActive  = !this.isActive;
    }
  },
	props : [
		'user',
		'route',
		]
}
</script>