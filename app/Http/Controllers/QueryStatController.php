<?php

namespace App\Http\Controllers;

use App\Models\QueryStat;

class QueryStatController extends Controller
{
    public function index()
    {

        $dbUser = env('DB_USERNAME_STAT');

        $queries = QueryStat::where('userid', function ($query) use ($dbUser) {
            $query->from('pg_authid')
                ->select('oid')
                ->where('rolname', $dbUser);
        })->orderBy('calls', 'desc')->get();

        return response()->view('stat', ['queries' => $queries]);
    }
}
