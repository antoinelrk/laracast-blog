<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MailchimpMarketing\ApiClient;
use MailchimpMarketing\ApiException;
use App\Http\Requests\Newsletter\SubscribeRequest;
use App\Http\Requests\Newsletter\UnsubscribeRequest;

class NewsletterController extends Controller
{
    protected $mailchimp;
    protected $listId;

    public function __construct()
    {
        $this->middleware('web');
        $this->listId = '27257af29d';

        $this->mailchimp = new ApiClient();
        $this->mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => config('services.mailchimp.server')
        ]);
    }

    public function index()
    {
        $response = $this->mailchimp->lists->getListMembersInfo($this->listId);
        dd($response);
    }

    public function subscribe(SubscribeRequest $request)
    {
        $response = $this->mailchimp->lists->addListMember($this->listId, [
            'email_address' => $request->email,
            'status' => 'subscribed'
        ]);

        dd($response);
    }

    public function unsubscribe(UnsubscribeRequest $request)
    {
        try {
            $response = $this->mailchimp->lists->updateListMember($this->listId, md5(strtolower($request->email)), ["status" => "cleaned"]);
            print_r($response);
        } catch (ApiException $e) {
            echo $e->getMessage();
        }
    }
}
