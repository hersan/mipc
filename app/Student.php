<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @package App
 */
class Student extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'birthday'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'birthday',
    ];

    /**
     * Get related topics
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function topics()
    {
        return $this->belongsToMany(Topic::class)->withPivot('mark')->withTimestamps();
    }

    /**
     * Adding topics to student
     *
     * @param $topics
     */
    public function subscribeToTopics($topics)
    {
        $this->topics()->sync($topics);
    }
}
