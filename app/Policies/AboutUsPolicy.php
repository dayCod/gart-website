<?php

namespace App\Policies;

use App\Models\AboutUs;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AboutUsPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return AboutUs::count() > 0 ? false : true;
    }
}
