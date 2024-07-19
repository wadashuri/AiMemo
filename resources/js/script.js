import { createApp } from 'vue';
import Index from './memo/index.vue';
import Show from './memo/show.vue';

// Indexコンポーネントをマウント
createApp(Index).mount('#index-app');

// Showコンポーネントをマウント
createApp(Show).mount('#show-app');