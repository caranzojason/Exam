<?php

namespace App\Repositories\Comments;

use App\Comments;
use App\Repositories\Comments\CommentsRepositoryInterface;

class CommentsRepository implements CommentsRepositoryInterface
{
    public function saveComments($pComments)
    {
        $comments = new Comments();
        $comments->Comment =  $pComments;
        $comments->save();

        return response()->json([$comments
        ], 201);
    }
}