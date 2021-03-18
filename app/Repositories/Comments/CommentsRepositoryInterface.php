<?php

namespace App\Repositories\Comments;

use App\Comments;

interface CommentsRepositoryInterface
{
    public function saveComments(Comments $comments);
}