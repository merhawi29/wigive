<?php
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;

    class ClearCart
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
         */
        public function handle(Request $request, Closure $next)
        {
            $response = $next($request);

            // Clear the cart session data if the user is not on the cart.show route
            if (!$request->routeIs('cart.show')) {
                session()->forget('cart');
            }

            return $response;
        }
    }
