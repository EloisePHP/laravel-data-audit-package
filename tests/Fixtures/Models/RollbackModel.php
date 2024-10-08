<?php

namespace Eloise\RecordModel\Tests\Fixtures\Models;

use Illuminate\Database\Eloquent\Model;
use Eloise\RecordModel\Contracts\RecordableModel;
use Eloise\RecordModel\Traits\RecordableModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RollbackModel extends Model implements RecordableModel
{
    use HasFactory;
    use RecordableModelTrait;

    protected $table = 'test_eloise_rollback_model';

    protected $fillable = [
        'test_name',
        'test_description',
        'test_int',
        'test_array',
    ];

    protected $casts = [
        'test_array' => 'array',
    ];
}
