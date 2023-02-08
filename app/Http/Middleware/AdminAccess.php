<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $user = User::with('roles')->findOrFail(auth()->id());
        if($user->getRelation('roles')->count() > 0) {
            foreach($user->roles as $role) {
                if($role->name && $role->name == 'admin') {
                    return $next($request);
                } else {
                    return redirect()->route('home')->with('error','صفحه مورد نظر وجود ندارد!');
                }
            }
        } else {
            return redirect()->route('home')->with('error','صفحه مورد نظر وجود ندارد!');
        }
    }
}
