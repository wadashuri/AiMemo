document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("memoStore")
        .addEventListener("click", function (event) {
            event.preventDefault();

            axios
                .post("/api/memo/store", {})
                .then(function (response) {
                    const memoList = document.getElementById("memo-list");
                    const listItem = document.createElement("li");
                    listItem.textContent = "新規メモ"; // ここで実際のメモ内容を使用するなら、responseから取得します
                    listItem.className =
                        "px-4 py-2 text-white hover:text-white hover:bg-gray-700";
                    // 一番上に追加する
                    memoList.insertBefore(listItem, memoList.firstChild);
                })
                .catch(function (error) {
                    console.error("Error saving memo:", error);
                    alert("メモの保存中にエラーが発生しました。");
                });
        });
});
