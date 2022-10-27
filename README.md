# Composer autoload - PSR4

First, create the following directory structure with files:

    |-- src
    │   |-- models
    │       |-- User.php
    |       |--Comment.php
    |-- composer.json
    |-- index.php

### Usage

    $ composer dump-autoload
    $ php index.php

### Final index code:

    <?php

    require './vendor/autoload.php';

    use Learn\Composer\Models\Comment;
    use Learn\Composer\Models\User;


    $user = new User("Sakhawat Hossen", "58/B/2, West Rajabazar, Tejgaon, Dhaka");
    $user->getDetails();
    $comment = new Comment("Test comment", $user);
    $comment->getComment();
