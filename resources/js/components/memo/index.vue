<template>
  <li v-if="links.length === 0" class="px-4 py-2 text-white hover:text-white hover:bg-gray-700">
    メモはありません。
  </li>
  <li v-for="link in links" :key="link.id" class="px-4 py-2 text-white hover:text-white hover:bg-gray-700">
    <a :href="link.href">{{ link.name }}</a>
  </li>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const links = ref([]);

onMounted(() => {
  fetch('/api/memo/index')
    .then(response => response.json())
    .then(data => {
      if (data.data.length === 0) {
        links.value = [];
      } else {
        links.value = data.data.map(memo => ({
          id: memo.memos.id,
          name: memo.memos.title,
          href: `/memo/${memo.memos.id}`
        }));
      }
    })
    .catch(error => console.error('Error:', error));
});
</script>