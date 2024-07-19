document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/memo/index")
        .then((response) => response.json())
        .then((data) => {
            const memoList = document.getElementById("memo-list");
            memoList.innerHTML = ""; // Clear the list first

            if (!data.data || data.data.length === 0) {
                memoList.innerHTML =
                    '<li class="px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700">メモはありません。</li>';
            } else {
                data.data.forEach((memo) => {
                    const listItem = document.createElement("li");
                    listItem.textContent = memo.memos.title;
                    listItem.className =
                        "px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700";
                    memoList.appendChild(listItem);
                });
            }
        })
        .catch((error) => console.error("Error:", error));
});
