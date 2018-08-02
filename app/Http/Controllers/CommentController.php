<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Team;
use \App\User;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this-> validate(request(), ['content' => 'required|min:10',
                                    
                                        ]);
        $userid = auth()->user()->id;
        

        $comment = \App\Comment::create([
                                    'content' => request('content'),
                                    'user_id' => $userid,
                                    'team_id' => request('team_id')
        
            
//// zavrsiti ovu pricu sa user_id i team_id
        ]);

        return redirect()->back();
    }
}
