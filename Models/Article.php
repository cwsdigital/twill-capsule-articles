<?php

namespace App\Twill\Capsules\Articles\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use App\Twill\Capsules\Base\Crops;
use App\Twill\Capsules\Base\Models\Behaviours\HasHeading;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class Article extends Model
{
    use HasBlocks;
    use HasTranslation;
    use HasSlug;
    use HasMedias;
    use HasFiles;
    use HasRevisions;
    use HasHeading;
    use HasMetadata;

    protected $fillable = [
        'published',
        'publish_start_date',
        'publish_end_date',
        'author_id',
    ];

    public $translatedAttributes = [
        'title',
        'heading',
        'subheading',
        'excerpt',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = Crops::ALL_CROPS;

    public $metadataFallbacks = [
        'title' => 'heading',
    ];
}
