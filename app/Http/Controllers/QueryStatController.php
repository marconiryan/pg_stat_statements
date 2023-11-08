<?php

namespace App\Http\Controllers;

use App\Models\QueryStat;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class QueryStatController extends Controller
{
    public function index(): Response
    {
        $dbUser = env('DB_USERNAME_STAT');

        $queries = QueryStat::where('userid', function ($query) use ($dbUser) {
            $query->from('pg_authid')
                ->select('oid')
                ->where('rolname', $dbUser);
        })->orderBy('calls', 'desc')->get();
        return response()->view('stat', ['queries' => $queries]);
    }

    public function reset(){
        DB::statement('SELECT pg_stat_statements_reset()');
        return redirect()->route('index');

    }
}
