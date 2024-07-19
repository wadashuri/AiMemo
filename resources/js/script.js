import { createApp } from 'vue';
import Index from './components/memo/index.vue';
import Show from './components/memo/show.vue';

// Indexコンポーネントをマウント
createApp(Index).mount('#index-app');

// Showコンポーネントをマウント
createApp(Show).mount('#show-app');