<?php

namespace Litepie\Message\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Trans\Traits\Translatable;
use Litepie\User\Traits\User as UserModel;

class Message extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable,  PresentableTrait, UserModel;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'message.message';
    /**
     * User morph to many relation.
     */
    public function user()
    {
        return $this->morphTo();
    }
}
