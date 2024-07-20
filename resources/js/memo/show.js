import EditorJS from "@editorjs/editorjs";
import Header from "@editorjs/header";
import List from "@editorjs/list";

// メモを表示する関数
export function showMemo(memoId) {
    fetch(`/api/memo/${memoId}`)
        .then((response) => response.json())
        .then((data) => {
            const content = data.data.content;
            document.getElementById('inputTitle').value = data.data.title;
            if (content && content.blocks) {
                editor.render({
                    time: content.time || new Date().getTime(),
                    blocks: content.blocks,
                    version: content.version || "2.18.0"
                });
            } else {
                console.error("Invalid data format:", data);
            }
        })
        .catch((error) => console.error("Error:", error));
}

// エディターJSを初期化
const editor = new EditorJS({
    holder: "editorjs",
    tools: {
        header: {
            class: Header,
            inlineToolbar: ["link"],
        },
        list: {
            class: List,
            inlineToolbar: true,
        },
    },
});
