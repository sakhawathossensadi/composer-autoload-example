<?php

namespace Learn\Composer\Models;

class Comment
{
    private $commentData;
    private User $user;

    public function __construct($commentData, User $user)
    {
        $this->commentData = $commentData;
        $this->user = $user;
    }

    public function getComment()
    {
        echo "Comments : " . "<br>";
        echo "Commented By : " . $this->user->getName() . "<br>";
        echo "Comment : " . $this->commentData . "<br>";
    }
}
