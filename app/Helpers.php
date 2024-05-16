<?php

use App\Models\AdminMenu;
use Illuminate\Support\Facades\DB;

function user_access($menu)
{

    $current_user = AdminMenu::where('url', 'like', '%' . $menu . '%')->first();
    if (is_object($current_user) && auth()->user()->user_type != 1) {
        $authUser = collect(json_decode(auth()->user()->access_menu))->toArray();
        return in_array($current_user->id, $authUser);
    }
    return true;
}
