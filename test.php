
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
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
}

.post h3 {
    color: #fff;
    margin-bottom: 10px;
}

.post p {
    color: #ccc;
}

footer {
    background-color: #333;
    text-align: center;
    padding: 10px;
    color: #aaa;
    box-shadow: 0px -3px 10px #000;
}
</style>
<script>
        function openModal() {
            document.getElementById("postModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("postModal").style.display = "none";
        }

        function addPost() {
            let userMessage = document.getElementById("postContent").value;
            if (userMessage.trim() === "") {
                alert("Wpisz treść posta!");
                return;
            }

            let postContainer = document.createElement("div");
            postContainer.classList.add("post");

            let userName = document.createElement("h3");
            userName.textContent = "Ty";

            let postText = document.createElement("p");
            postText.textContent = userMessage;

            postContainer.appendChild(userName);
            postContainer.appendChild(postText);

            document.querySelector(".main-content").appendChild(postContainer);

            document.getElementById("postContent").value = "";
            closeModal();
        }
    </script>
     <style>
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

        .add-post-btn {
            padding: 10px 15px;
            background: #444;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 10px auto;
        }

        .add-post-btn:hover {
            background: #666;
        }
    </style>
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
            <button class="add-post-btn" onclick="openModal()">Dodaj Post</button>
        </div>
        <div class="sidebar">
            <a href="#">Pomoc</a>
            <a href="#">Kontakt</a>
            <a href="#">Regulamin</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 LoreNest. Wszelkie prawa zastrzeżone. All Rights Reserved</p>
    </footer>

    <div id="postModal" class="modal">
        <h3>Dodaj nowy post</h3>
        <textarea id="postContent" placeholder="Wpisz treść..."></textarea>
        <button onclick="addPost()">Wyślij</button>
        <button onclick="closeModal()">Anuluj</button>
    </div>
</body>
</html>
