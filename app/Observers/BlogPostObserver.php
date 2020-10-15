<?php

namespace App\Observers;

use App\Models\BlogPost;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogPostObserver
{
    /**
     * Handle the models blog post "created" event.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return void
     */
    public function created(BlogPost $BlogPost)
    {
        //
    }

    public function updating(BlogPost $BlogPost) 
    {
        $this->setPublishedAt($BlogPost);
        $this->setSlug($BlogPost);
    }
    /**
     * Handle the models blog post "updated" event.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return void
     */
    public function updated(BlogPost $BlogPost)
    {

    }

    /**
     * Handle the models blog post "deleted" event.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return void
     */
    public function deleted(BlogPost $BlogPost)
    {
        //
    }

    /**
     * Handle the models blog post "restored" event.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return void
     */
    public function restored(BlogPost $BlogPost)
    {
        //
    }

    /**
     * Handle the models blog post "force deleted" event.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return void
     */
    public function forceDeleted(BlogPost $BlogPost)
    {
        //
    }

    protected function setPublishedAt(BlogPost $BlogPost) 
    {
        $needsetPublished = empty($BlogPost->published_at) && $BlogPost->is_published; 
        if ($needsetPublished) {
            $BlogPost->published_at = Carbon::now();
        }
    }

    protected function setSlug(BlogPost $BlogPost)
    {
        if (empty($BlogPost->slug)) {
            $BlogPost->slug = Str::slug($BlogPost->title);
        }
    }
}
