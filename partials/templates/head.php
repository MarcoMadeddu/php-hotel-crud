<?php
include_once __DIR__ .'/../../env.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $base_path;?>dist/css/main.css">
</head>
<body>

<header class="main-header">
    <nav class="navbar navbar-dark bg-dark">
        <a href="<?php echo $base_path; ?> " class="navbar-brand">Boolean hotel</a>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="<?php echo $base_path; ?> " class="nav-link">Home</a>
                <a href="<?php echo $base_path; ?>insert.php" class="nav-link">Create new room</a>
            </li>
        </ul>
    </nav>
</header>