<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Enums\Steps;
use App\Functions\Functions;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use App\Models\State;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use App\Models\Certificate;
use App\Models\Message;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Log;
use PDF;
use Lang;

use App\Models\Enterprise;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        try {
            $locale = App::currentLocale();

            return view('index');//, compact('faq'));
        } catch (Throwable $e) {
            report($e);
            Log::error($e->getMessage());

            return false;
        }
    }

    public function setlocale($locale)
    {
        try {
            App::setlocale($locale);
            session()->put('locale', $locale);
            return redirect()->back();
        } catch (Throwable $e) {
            report($e);
            Log::error($e->getMessage());

            return false;
        }
    }

    public function setlocaleverification($locale)
    {
        try {
            App::setlocale($locale);
            session()->put('locale', $locale);
            return redirect()->back();
        } catch (Throwable $e) {
            report($e);
            Log::error($e->getMessage());

            return false;
        }
    }

    // public function leaveMessage(Request $request)
    // {
    //     try {

    //             $message = new Message([
    //                 'from' => $request->anonymous_email ? $request->anonymous_email : '',
    //                 'to' => 'Admin',
    //                 'subject' => 'Message Left by Anonymous User',
    //                 'body' => $request->message ? $request->message.',-> '.$request->name : '',
    //                 'type' => 'Inbox',
    //                 'status' => '',
    //             ]);
    //             $message->save();

    //             Log::channel('users_activities')->info('New Message', [
    //                 'user_id' => 'Anonymous',
    //                 'to' => 'Admin',
    //             ]);

    //             $users = User::all()->where('role_id', '==', '1');
    //             foreach ($users as $user) {
    //                 $message->users()->attach($user->id, ['message_id' => $message->id]);
    //             }

    //         return response()->json([
    //             'message' => __('Thanks!'),
    //             'result' => true
    //         ], 200);
    //     } catch (Throwable $e) {
    //         report($e);
    //         Log::error($e->getMessage());
    //         return false;
    //     }
    // }

    // public function newsletterSubscription(Request $request)
    // {
    //     try {

    //             $message = new Message([
    //                 'from' => $request->subscribe_email ? $request->subscribe_email : '',
    //                 'to' => 'Admin',
    //                 'subject' => 'Newsletter Subscription',
    //                 'body' => 'Request Left by Anonymous User To Subscribe In The Newsletter',
    //                 'type' => 'Inbox',
    //                 'status' => '',
    //             ]);
    //             $message->save();

    //             Log::channel('users_activities')->info('New Message', [
    //                 'user_id' => 'Anonymous',
    //                 'to' => 'Admin',
    //             ]);

    //             $users = User::all()->where('role_id', '==', '1');
    //             foreach ($users as $user) {
    //                 $message->users()->attach($user->id, ['message_id' => $message->id]);
    //             }

    //         return response()->json([
    //             'message' => __('Thanks!'),
    //             'result' => true
    //         ], 200);
    //     } catch (Throwable $e) {
    //         report($e);
    //         Log::error($e->getMessage());
    //         return false;
    //     }
    // }

    // public function download($type, $fileName)
    // {
    //     $filePath = '';
    //     if ($type == 'user_guide'){
    //         $filePath = 'data/docs/دليل المستخدم/'. $fileName;
    //     }
    //     else{

    //     }

    //     if (file_exists($filePath))
    //     {
    //         // Send Download
    //         $headers = [
    //             'Content-Type: application/pdf',
    //             'Content-Length: '. filesize($filePath)
    //         ];


    //         return response()->download($filePath, $fileName, $headers);
    //     }
    //     else
    //     {
    //         // Error
    //         exit('Requested file does not exist on our server!');
    //     }
    // }
}
