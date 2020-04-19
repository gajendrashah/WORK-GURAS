<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Traits\MailTrait;
use App\Http\Services\ContactService;
use App\Http\Requests\ContactRequest;
use Laracasts\Flash\Flash;

class ContactController extends Controller
{
    use MailTrait;

    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return view('site::contact');
    }

    public function contact(ContactRequest $request)
    {
        try {
            $this->contactMail($request);

            $this->contactService->create($request->only('name', 'email', 'phone_number', 'subject', 'message'));

            Flash::success('Thank for your contact. We will get back to you as soon as possible.');

            return redirect()->back();
        }
        catch (Exception $e) {
            Flash::success('Sorry, Try Again.');

            return redirect()->back();
        }

    }


}
