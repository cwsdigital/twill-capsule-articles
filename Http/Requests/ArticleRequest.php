<?php

namespace App\Twill\Capsules\Articles\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class ArticleRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
