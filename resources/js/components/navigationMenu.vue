<template>
    <div>
      <form method="POST" action="{{ route('logout') }}" id="logout-form">
        @csrf
  
        <a href="#" @click.prevent="logout">{{ __('Log Out') }}</a>
      </form>
    </div>
  </template>
  
  <script setup>
  const logout = () => {
    document.getElementById('logout-form').submit();
  };
  </script>