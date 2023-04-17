<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Services\AbstractService;

class PostService extends AbstractService {
    public function __construct(PostRepository $postRepository) {
        $this->repository = $postRepository;
    }
}