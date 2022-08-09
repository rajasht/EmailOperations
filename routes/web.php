<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestMail;
use App\Mail\SendMarkdownTestMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//--------------------------MAIL SENDING USING FACADES MAIL CLASS-SEND FUNCTION ---------------------------------
/*
 * Route to Send Email Using Facade-Mail Class
 * send function of class takes 3 parameters, first two of array type and third a function
 * $msg is a parameter passed to anonymous function
 * $msg->to() function takes two parameters , first the receiver email id and the second Receiver Name
 * $msg->subject() contains String type Heading of the Mail
 * $msg->setBody() contains String type Content of the Mail
 * returns "Mail Sent Successfully" as Acknowledgement on successfull execution of Route url.
 */

 /*
 Route::get('/send-mail',function(){
    Mail::send([],[], function($msg){
        $msg->to("sagniksht@test.com","Sagnik Mandal")
            ->subject("Mail Sending Demo using Facade Mail")
            ->setBody("Hi, this is mock mail sent using Facade Mail Class.");
    });
    echo "Mail Sent Succesfully.";
});
*/


//---------------- METHOD 2 USING FACADES MAIL CLASS-SEND FUNCTION WITH PARSED VIEW VALUES------------------

/*
 * Route to Send Email Using Facade-Mail Class
 * send function of class takes 3 parameters, first is view, second is array and third a function
 * second parameter contains the actual message in array as key:value form Shown to the Receiver 
 * $msg is a parameter passed to anonymous function
 * $msg->to() function takes two parameters , first the receiver email id and the second Receiver Name
 * $msg->subject() contains String type Heading of the Mail
 * returns "Mail Sent" sas Acknowledgement on successfull execution of Route url.
 */

 /*
Route::get('/send-mail',function(){
    $data = ["greet"=>"Sagnik Mandal, Happy Birthday Man."];
    Mail::send('EmailView',$data, function($msg){
        $msg->to("sagniksht@test.com","Sagnik Mandal")
            ->subject("Birthday Wishes to Mr. Sagnik Mandal");
    });
    echo "Mail Sent.";
});

*/
//--------------- METHOD 3 USING MAILABLE CLASS BUT WITHOUT MARKDOWN AND VIEW ----------------------

/**
 * Sending Mail Using SendTestMail class of Mail Folder 
 * run " php artisan make:mail SendTestMail " to Create a Mail Folder having SendTestMail.php File in App
 * Mail::to() function only takes Receiver's Email Id
 * Mail::send() function receives a new instance of SendTestMail Class
 * returns "Mail Sent" sas Acknowledgement on successfull execution of Route url.
 */

/*
 Route::get('/send-mail',function(){
    Mail::to("sagnik@sht.com")->send(new SendTestMail());
    echo "Mail Sent Operation Successfull.";
});
*/

//-------------- METHOD 4 USING MAILABLE CLASS WITH DEFAULT MARKDOWN CLASS AND VIEW --------------------

/**
 * Sending Mail Using SendTestMail class of Mail Folder 
 * run " php artisan make:mail SendTestMail " to Create a Mail Folder having SendTestMail.php File in App
 * Mail::to() function only takes Receiver's Email Id
 * Mail::send() function receives a new instance of SendTestMail Class
 * returns "Mail Sent" sas Acknowledgement on successfull execution of Route url.
 */

Route::get('/send-mail',function(){
    Mail::to("sagnik@sht.com")->send(new SendMarkdownTestMail());
    echo "Mail Sending completed successfully.";
});

