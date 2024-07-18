import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';

// エディターJSを初期化
const editor = new EditorJS({
    holder: 'editorjs',
    tools: {
        header: {
            class: Header,
            inlineToolbar: ['link'],
        },
        list: {
            class: List,
            inlineToolbar: true,
        },
    },
});