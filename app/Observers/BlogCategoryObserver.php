<?php

namespace App\Observers;

use App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogCategoryObserver
{
    protected function setSlug(BlogCategory $BlogCategory)
    {
        if (empty($BlogCategory->slug)) {
            $BlogCategory->slug = Str::slug($BlogCategory->title);
        }
    }

    public function creating(BlogCategory $BlogCategory) {
        $this->setSlug($BlogCategory);
    }
    /**
     * Handle the models blog category "created" event.
     *
     * @param  \App\Models\BlogCategory  $BlogCategory
     * @return void
     */
    public function created(BlogCategory $BlogCategory)
    {
        //
    }


    public function updating(BlogCategory $BlogCategory)
    {
        $this->setSlug($BlogCategory);
    }

    /**
     * Handle the models blog category "updated" event.
     *
     * @param  \App\ModelsBlogCategory  $BlogCategory
     * @return void
     */
    public function updated(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "deleted" event.
     *
     * @param  \App\ModelsBlogCategory  $BlogCategory
     * @return void
     */
    public function deleted(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "restored" event.
     *
     * @param  \App\ModelsBlogCategory  $BlogCategory
     * @return void
     */
    public function restored(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "force deleted" event.
     *
     * @param  \App\ModelsBlogCategory  $BlogCategory
     * @return void
     */
    public function forceDeleted(BlogCategory $BlogCategory)
    {
        //
    }
}
