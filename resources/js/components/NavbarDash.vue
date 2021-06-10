<template>
	<nav class="navbar is-dark is-hidden-desktop">
    <div class="container is-fluid">
      <div class="navbar-brand">
        <a class="navbar-item" href="/home">
					<i class="fas fa-home"></i>&nbsp;Home
        </a>
        <span class="navbar-burger burger" :class="{'is-active':isActive}" @click="burgerToggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
    <div id="navMenu" class="navbar-menu" :class="{'is-active':isActive}">
      <div class="navbar-start">
      </div>
        <div class="navbar-end">
					<div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">{{ user.name }}</a>
            <div class="navbar-dropdown">
              <!-- <a class="navbar-item" href="#"><i class="far fa-chart-bar"></i>&nbsp;Dashboard</a>
              <a class="navbar-item" href="#"><i class="fas fa-user"></i>&nbsp;Profile</a>
              <a class="navbar-item" href="#"><i class="fas fa-cog"></i>&nbsp;Settings</a>
              <hr class="navbar-divider"> -->
              <a class="navbar-item" :href="route" style="color:red; font-weight: bold;"
							onclick="event.preventDefault();
								document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
							<!--{{ __('Logout') }}-->Logout
							</a>
							<form id="logout-form" action="logout" method="POST" class="d-none">
								<input type="hidden" name="_token" v-bind:value="csrf">
							</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
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
