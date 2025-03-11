<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8"><script>/* <![CDATA[ */ ringDataLayer = {"context":{"variant":{"accelerator":"ZG93bmxvYWQucG9jenRhLm9uZXQucGw6OnByb2Rfd2l0aF91c2VyX2RhdGFfZG93bmxvYWRlcl9pbl9hd3NfMg=="},"id":{"website":"9481b0b7-7c3d-463b-8f3c-9de5c8289e21"}}}; /* ]]> */</script><script>/* <![CDATA[ */ accConf = {"events":{"endpointPaths":["/a8f4d8cd95e164917035b64b867a45dd"]}}; /* ]]> */</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna - Posty</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #222;
    color: #fff;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #333;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0px 3px 10px #000;
}

.logo {
    width: 40px;
    height: 40px;
    background-image: url('logo720.png');
    background-size: cover;
    border-radius: 50%;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    padding: 10px;
    border-radius: 5px;
    transition: background 0.3s;
}

nav a:hover {
    background-color: #555;
}

.layout {
    display: flex;
    flex: 1;
}

.sidebar {
    width: 20%;
    max-width: 250px;
    background-color: #333;
    padding: 20px;
    box-shadow: 2px 0px 10px #000;
    border-radius: 0 10px 10px 0;
}

.sidebar a {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    background-color: #444;
    transition: background 0.3s;
}

.sidebar a:hover {
    background-color: #555;
}

.main-content {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #fff;
}

.post {
    background-color: #333;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 3px 10px #000;
    max-width: 600px;
    position: relative;
}

.post h3 {
    color: #fff;
    margin-bottom: 10px;
}

.post p {
    color: #ccc;
}

.timestamp {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 12px;
    color: #bbb;
}

.options {
    position: absolute;
    bottom: 10px;
    right: 10px;
    cursor: pointer;
}

.options-menu {
    display: none;
    background-color: #444;
    border-radius: 5px;
    padding: 10px;
    position: absolute;
    top: -40px;
    right: 0;
    box-shadow: 0px 3px 10px #000;
}

.options-menu button {
    background-color: #555;
    color: #fff;
    border: none;
    padding: 5px 10px;
    width: 100%;
    border-radius: 5px;
    margin-bottom: 5px;
    cursor: pointer;
}

.options-menu button:hover {
    background-color: #777;
}

footer {
    background-color: #333;
    text-align: center;
    padding: 5px 0;
    color: #aaa;
    box-shadow: 0px -3px 10px #000;
    position: fixed;
    bottom: 0;
    width: 100%;
}


.modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    background: #333;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 3px 10px #000;
    text-align: center;
}

.modal textarea {
    width: 100%;
    height: 100px;
    margin-bottom: 10px;
    background: #222;
    color: #fff;
    border: none;
    padding: 5px;
    border-radius: 5px;
}

.modal input[type="file"] {
    margin: 10px 0;
    color: #fff;
}

.modal button {
    padding: 10px;
    border: none;
    background: #555;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
    margin: 5px;
}

.modal button:hover {
    background: #777;
}

.add-post-btn, .search-btn {
    padding: 10px 15px;
    background: #444;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    margin: 10px auto;
}

.add-post-btn:hover, .search-btn:hover {
    background: #666;
}

.search-container {
    display: flex;
    flex-direction: column;  
    align-items: center; 
    gap: 0px; 
    margin-top: 12px; 
}

@media (min-width: 768px) {
    .search-container {
        justify-content: center; 
    }
    .add-post-btn, .search-btn {
        display: inline-block; 
    }
}
</style>

<script>
function openModal() {
    document.getElementById("postModal").style.display = "block";
}

function closeModal() {
    document.getElementById("postModal").style.display = "none";
}

function openSearchModal() {
    document.getElementById("searchModal").style.display = "block";
}

function closeSearchModal() {
    document.getElementById("searchModal").style.display = "none";
}

function addPost() {
    let userMessage = document.getElementById("postContent").value;
    let fileInput = document.getElementById("fileInput").files[0];

    if (userMessage.trim() === "" && !fileInput) {
        alert("Wpisz treść posta lub załącz plik ,wideo lub zdjęcie!");
        return;
    }
    let postContainer = document.createElement("div");
    postContainer.classList.add("post");

    let userName = document.createElement("h3");
    userName.textContent = "Ty";

    let postText = document.createElement("p");
    postText.textContent = userMessage;

    let timestamp = document.createElement("span");
    timestamp.classList.add("timestamp");
    let now = new Date();
    timestamp.textContent = now.toLocaleString();

    let optionsButton = document.createElement("div");
    optionsButton.classList.add("options");
    optionsButton.innerHTML = "&#x22EE;";

    let optionsMenu = document.createElement("div");
    optionsMenu.classList.add("options-menu");
    optionsMenu.innerHTML = `<button onclick="editPost(this)">Edytuj</button>
                             <button onclick="deletePost(this)">Usuń</button>`;

    optionsButton.appendChild(optionsMenu);

    optionsButton.onclick = function() {
        optionsMenu.style.display = optionsMenu.style.display === 'block' ? 'none' : 'block';
    };

    postContainer.appendChild(userName);
    postContainer.appendChild(postText);
    postContainer.appendChild(timestamp);
    postContainer.appendChild(optionsButton);
    postContainer.appendChild(optionsMenu);

    if (fileInput) {
        let fileURL = URL.createObjectURL(fileInput);
        let fileType = fileInput.type;
        if (fileType.startsWith("image/")) {
            let img = document.createElement("img");
            img.src = fileURL;
            img.style.maxWidth = "100%";
            img.style.borderRadius = "5px";
            img.style.marginTop = "10px";
            postContainer.appendChild(img);
        } else if (fileType.startsWith("video/")) {
            let video = document.createElement("video");
            video.src = fileURL;
            video.controls = true;
            video.style.maxWidth = "100%";
            video.style.marginTop = "10px";
            postContainer.appendChild(video);
        } else {
            let fileLink = document.createElement("a");
            fileLink.href = fileURL;
            fileLink.textContent = " Plik: " + fileInput.name;
            fileLink.style.display = "block";
            fileLink.style.marginTop = "10px";
            fileLink.style.color = "#00f";
            postContainer.appendChild(fileLink);
        }
    }

    document.querySelector(".main-content").appendChild(postContainer);
    document.getElementById("postContent").value = "";
    document.getElementById("fileInput").value = "";
    closeModal();
}

function editPost(button) {
    let postContent = button.closest(".post").querySelector("p");
    let newContent = prompt("Edytuj post:", postContent.textContent);
    if (newContent) {
        postContent.textContent = newContent;
    }
}

function deletePost(button) {
    let postContainer = button.closest(".post");
    postContainer.remove();
}

function searchPosts() {
    let searchUser = document.getElementById("searchUser").value.trim().toLowerCase();
    let searchDate = document.getElementById("searchDate").value.trim();
    let posts = document.querySelectorAll(".post");
    posts.forEach(post => {
        let userName = post.querySelector("h3").textContent.toLowerCase();
        let timestamp = post.querySelector(".timestamp").textContent;
        let postDate = timestamp.split(", ")[0]; 
        if ((searchUser && !userName.includes(searchUser)) || (searchDate && !postDate.includes(searchDate))) {
            post.style.display = "none";
        } else {
            post.style.display = "block";
        }
    });
}
</script>

<body>
<header>
    <div class="logo"></div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Notifications</a>
        <a href="#">Messages</a>
    </nav>
</header>

<div class="layout">
    <div class="sidebar">
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <p><a href="logout.php">Wyloguj</a></p>
    </div>
    <div class="main-content">
        <h1>Posty użytkowników</h1>
        <div class="search-container">
            <button class="search-btn" onclick="openSearchModal()">Szukaj postów</button>
            <button class="add-post-btn" onclick="openModal()">Dodaj Post</button>
        </div>
    </div>
    <div class="sidebar">
        <a href="#">Pomoc</a>
        <a href="#">Kontakt</a>
        <a href="#">Regulamin</a>
    </div>
</div>

<footer>
    <p>&copy; 2024 LoreNest. Wszelkie prawa zastrzeżone.</p>
</footer>

<div id="postModal" class="modal">
    <h3>Dodaj nowy post</h3>
    <textarea id="postContent" placeholder="Wpisz treść..."></textarea>
    <input type="file" id="fileInput">
    <button onclick="addPost()">Wyślij</button>
    <button onclick="closeModal()">Anuluj</button>
</div>

<div id="searchModal" class="modal">
    <h3>Wyszukaj posty</h3>
    <input type="text" id="searchUser" placeholder="Nazwa użytkownika">
    <input type="date" id="searchDate">
    <button onclick="searchPosts()">Szukaj</button>
    <button onclick="closeSearchModal()">Anuluj</button>
</div>

</body>
</html>
