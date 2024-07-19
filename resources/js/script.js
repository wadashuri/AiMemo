import { createApp } from 'vue';
import navigationMenu from './components/navigationMenu.vue';
import Index from './components/memo/index.vue';
import Show from './components/memo/show.vue';

createApp({
    components: {
        navigationMenu,
        Index,
        Show,
    }
  }).mount('#app');