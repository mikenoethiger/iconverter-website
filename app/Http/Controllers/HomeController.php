<?php namespace App\Http\Controllers;

use App\Http\Requests\PostImageRequest;
use App\Services\IconverterService;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {

	/**
	 * Show the application to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('home');
	}

    public function postIcon(PostImageRequest $request, IconverterService $iconverter)
    {
        $zipFile = $iconverter->generate($request->file('image'));
        $response = response()->download($zipFile)->deleteFileAfterSend(true);
        // A corrupt zip will be returned if you don't do this step.
        // see: http://stackoverflow.com/questions/22481546/laravel-4-response-download-issue
        ob_end_clean();
        Session::flash('refresh_page', 'true');
        return $response;
    }
}
