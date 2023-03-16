<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException as AuthenticationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
	protected $levels = [
        //
    ];
    protected $dontReport = [
        //AuthorizationException::class,
       // HttpException::class,
       // ModelNotFoundException::class,
        //add more
        //TokenMismatchException::class,
       // ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    

    public function unauthenticated($request, AuthenticationException $exception)
    {
        return redirect('loginsite'); // use redirect('/login') or something if you want to redirect to login.
    }
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    
	public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
	public function report(Throwable $exception)
	{
		
	}
public function shouldReport(Throwable $exception){}
public function render($request, Throwable $exception){}
public function renderForConsole($output, Throwable $exception){}
}
