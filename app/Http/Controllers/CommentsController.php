<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Comments;
use App\Repositories\Comments\CommentsRepositoryInterface;

class CommentsController extends Controller
{
    private $commentsRepository;

    public function __construct(CommentsRepositoryInterface $commentsRepository)
    {
        $this->commentsRepository = $commentsRepository;
    }

    public function saveComments(Request $request)
    {
        return $this->commentsRepository->saveComments($request->Comment);
    }
}
