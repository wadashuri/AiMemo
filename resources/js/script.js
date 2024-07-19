import { createApp } from 'vue';
import Index from './components/memo/index.vue';
import Show from './components/memo/show.vue';

createApp({
    components: {
        Index,
        Show,
    }
  }).mount('#app');