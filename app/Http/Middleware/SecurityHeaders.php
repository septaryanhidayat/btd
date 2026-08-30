<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request and attach enterprise-grade security headers.
     * Prevents Clickjacking, MIME-sniffing, XSS injection, and sensitive info leakage.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Enterprise Security Headers
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=(self)');
        $response->headers->set('Cross-Origin-Opener-Policy', 'same-origin-allow-popups');
        $response->headers->set('Cross-Origin-Resource-Policy', 'cross-origin');
        
        // HSTS (HTTP Strict Transport Security) on HTTPS
        if ($request->isSecure() || $request->header('x-forwarded-proto') === 'https' || $request->header('x-https') === '1') {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        }

        // Remove revealing server headers to prevent hacker reconnaissance
        if (function_exists('header_remove')) {
            header_remove('X-Powered-By');
            header_remove('Server');
        }
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');

        return $response;
    }
}
