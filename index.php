<?php

require './vendor/autoload.php';

use Learn\Composer\Models\Comment;
use Learn\Composer\Models\User;


$user = new User("Sakhawat Hossen", "58/B/2, West Rajabazar, Tejgaon, Dhaka");
$user->getDetails();
$comment = new Comment("Test comment", $user);
$comment->getComment();
