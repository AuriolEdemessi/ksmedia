<!-- resources/views/admin.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            position: fixed;
        }
        .sidebar a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.2s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar .menu-title {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
        }
        .content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu-title">Admin Menu</div>
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('posts.index') }}"><i class="fas fa-file-alt"></i> Manage Posts</a>
        <a href="{{ route('posts.create') }}"><i class="fas fa-plus-circle"></i> Create Post</a>
        <a href="{{ route('admin.settings') }}"><i class="fas fa-cogs"></i> Settings</a>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
