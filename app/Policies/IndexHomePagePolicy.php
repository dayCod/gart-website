<?php

namespace App\Policies;

use App\Models\IndexHomePage;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IndexHomePagePolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return IndexHomePage::count() > 0 ? false : true;
    }
}
