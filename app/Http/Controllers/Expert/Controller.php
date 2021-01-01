<?php

    namespace App\Http\Controllers\Expert;
    
    use Auth;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    
    abstract class Controller extends BaseController
    {
        use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
        public function __construct()
       {
           view()->share('signedIn', Auth::check());
           view()->share('expert', Auth::expert());
        }
   }