<?php
namespace App\Http\Controllers;

use App\Http\IMicroServiceRequester;
use App\Http\Transformers\JsonTransformers\ArticleTransformer;

class ArticleController extends Controller
{

    private $dependencies = [
        'article' => 'path1',
        'comments' => 'path2'
    ];

    private $requester;

    public function __construct(IMicroServiceRequester $requester)
    {
        $this->requester = $requester;
    }

    public function show($id)
    {
        $article = $this->requester->get($this->dependencies['article'] . $id);
        $comments = $this->requester->get($this->dependencies['comments']);

        return (new ArticleTransformer($article, $comments))->transform();
    }
}
