<?php

namespace App\Http\Controllers;

use App\UserDetail;

class UserDetailController extends Controller
{
    public function index(UserDetail $detail)
    {
        try {
            $details = $detail->with('user')->sortable(['user.name'])->paginate(10);
        } catch (ColumnSortableException $e) {
            dd($e);
        }

        return view('user-detail', ['details' => $details]);
    }
}
