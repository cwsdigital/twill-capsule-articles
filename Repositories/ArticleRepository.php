<?php

namespace App\Twill\Capsules\Articles\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Articles\Models\Article;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class ArticleRepository extends ModuleRepository
{
    use HandleBlocks;
    use HandleTranslations;
    use HandleSlugs;
    use HandleMedias;
    use HandleFiles;
    use HandleRevisions;
    use HandleMetadata;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }
}
