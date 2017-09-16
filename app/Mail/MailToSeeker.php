<?php

namespace App\Mail;

use App\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class MailToSeeker extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {   
        $company = Company::where('user_id', Auth::id())->first();
      
        return $this->from($request->from)->view('employer.employer_email_view', ['msg'=>$request->message,'com_name'=>$company->name,'com_web'=>$company->website])->to($request->to)->subject($request->subject);
    }
}
