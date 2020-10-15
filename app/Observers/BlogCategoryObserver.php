<?php

namespace App\Observers;

use App\Models\BlogCategory;

class BlogCategoryObserver
{
    /**
     * Handle the models blog category "created" event.
     *
     * @param  \App\Models\BlogCategory  $modelsBlogCategory
     * @return void
     */
    public function created(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "updated" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function updated(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "deleted" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function deleted(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "restored" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function restored(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "force deleted" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function forceDeleted(BlogCategory $modelsBlogCategory)
    {
        //
    }
}
