<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: AuthMiddleware
 * 
 * Automatically generated via CLI.
 */
class AuthMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param Closure $next
     * @return mixed
     */
    public function handle(Closure $next)
    {
        // TODO: Add your middleware logic here (authentication, authorization, etc.)
       if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Papasukin lamang ang user kung HINDI naka-login (!logged_in)
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            redirect('login'); 
            exit();
        }

        return $next();
    }
}
