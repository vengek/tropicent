<?php
namespace App\Http\Transformers\JsonTransformers;

use App\Http\MicroServiceResponse;

class ArticleTransformer extends JsonTransformer
{

    private $article;

    private $comments;

    public function __construct(MicroServiceResponse $article, MicroServiceResponse $comments)
    {
        $this->article = $this->parse($article->getData())->article;
        $this->comments = $this->parse($comments->getData())->comments;
    }

    public function transform()
    {
        return [
            'id' => $this->article->id,
            'body' => $this->article->body,
            'comments' => $this->comments
        ];
    }

}