<?php

include "../php/functions.php";


$users = file_get_json("../data/users.json");




function showUserPage($user) {


    $classes = implode(",", $user->classes);
//heredoc
echo <<<HDFSFH

<nav class="nav nav-crumbs">
    <ul>
        <li><a href="users.php">Back</a></li>
    </ul>
</nav>

<div>
    <h2 id="labels">User Information</h2>
    <div class="card soft">
        <form>
            <div>
                <label class="form-label">Name</label>
                <input type="text" value="$user->name" class="form-input">
            </div>
            <div>
                <label class="form-label">Type</label>
                <input type="text" value="$user->type" class="form-input">
            </div>
            <div>
                <label class="form-label">Email</label>
                <input type="email" value="$user->email" class="form-input">
            </div>
            <div>
                <label class="form-label">Classes</label>
                <input type="text" value="$classes" class="form-input">
            </div>
            <button type="button" class="form-button" id="resetButton">submit</button>
        </form>
    </div>
</div>
HDFSFH;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Admin page</title>

    <?php include "../parts/meta.php"; ?>
</head>
<body>
    
    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="users.php">User List</li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="card soft">
            <?php

            if(isset($_GET['id'])){
                showUserPage($users[$_GET['id']]);

            } else {

            ?>
            <h2>Users list</h2>

            <nav class="nav">
                <ul>

            <?php

            for($i=0;$i<count($users);$i++){

                echo "<li>

                <a href='users.php?id=$i'>{$users[$i]->name}</a>
                
                </li>";


            }

            ?>
        </ul>
    </nav>

    <?php } ?>
        </div>
    </div>
</body>
</html>