<?php
/**
 * Created by PhpStorm.
 * User: Herminio
 * Date: 09/02/2018
 * Time: 22:59
 */

namespace App\Observers;


use App\Topic;
use Keygen\Keygen;

class CodeObserver
{
    /**
     * Listen to the User created event.
     *
     * @param Topic $topic
     * @return void
     */
    public function creating(Topic $topic)
    {
        $keygen = new Keygen();

        if(empty($topic->code)) {
            $topic->code = $keygen->length(5)->numeric()->generate();
        }
    }
}