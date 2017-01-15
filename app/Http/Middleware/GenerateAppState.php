<?php

namespace App\Http\Middleware;

use Closure;
use App\State;

class GenerateAppState
{
    private $state;

    public function __construct(State $state) {
      $this->state = $state;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->state->user = [
          'id' => 1,
          'name' => 'zixian'
        ];
        $this->state->feed = [];
        return $next($request);
    }
}
