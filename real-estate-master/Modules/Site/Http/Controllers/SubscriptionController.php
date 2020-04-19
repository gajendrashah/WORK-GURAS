<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Traits\MailTrait;
use App\Http\Services\SubscriptionService;
class SubscriptionController extends Controller
{
    use MailTrait;

    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    public function subscription(Request $request)
    {
        try {
            $this->subscriptionMail($request);

            $this->subscriptionService->create(['email' => $request->subcription_email]);

            return redirect()->back();
        }
        catch (Exception $e) {
            Flash::success('Sorry, Try Again.');

            return redirect()->back();
        }
    }
}
