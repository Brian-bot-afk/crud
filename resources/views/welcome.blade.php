<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BLOG</title>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
    padding: 50px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    margin: 0;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
h1 {
    color: #2c3e50;
    font-size: 2.5em;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}
.links {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    width: 80%;
    max-width: 400px;
}
.links a {
    display: block;
    margin: 15px 0;
    padding: 10px;
    text-decoration: none;
    color: #3498db;
    background-color: #ecf0f1;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-weight: bold;
}
.links a:hover {
    background-color: #3498db;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
}
</style>
</head>
<body>
<h1>Welcome to My Blog</h1>
<div class="links">
<a href="{{ route('users.index') }}">View Users</a>
<a href="{{ route('posts.index') }}">View Posts</a>
<a href="{{ route('categories.index') }}">View Categories</a>
<!-- The comments section is accessed through posts, so we don't link directly to it here -->
</div>
</body>
</html>