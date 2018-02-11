<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 *
 * @package App
 */
class Topic extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'code', 'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
