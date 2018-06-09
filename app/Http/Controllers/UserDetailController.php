<?php

namespace App\Http\Controllers;

use App\UserDetail;

class UserDetailController extends Controller
{

    public function index(UserDetail $detail)
    {
        try {
            $details = $detail->with('userOwner')->sortable(['userOwner.name'])->paginate(10);
        } catch (\Kyslik\ColumnSortable\Exceptions\ColumnSortableException $e) {
            dd($e);
        }

        return view('user-detail', ['details' => $details]);
    }
}
