<?php

namespace App\Policies;

use App\Models\{Apply, File};
use Illuminate\Auth\Access\HandlesAuthorization;

class ListingApply
{
    use HandlesAuthorization;

}
