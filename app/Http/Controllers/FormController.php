<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WhatsAppService;


class FormController extends Controller
{
    protected $whatsappService;
    public function __construct(WhatsAppService $whatsappService)
    {
        $this->whatsappService = $whatsappService;
    }

    function index(){
        return view('form');
    }

    function store1(Request $request){
        $result = $this->whatsappService->sendMessage(917878075119, 'Helloworld');

        return response()->json($result);
    }

    function store(Request $request){
        $result = $this->whatsappService->fetchTemplates();
        return response()->json($result);
    }
    function store2(Request $request)
{
    $recipientPhoneNumber = 917878075119;
    $templateName = 'iiuu'; // The name of your template
    $languageCode = 'en'; // E.g. "en_US"

    // For templates without parameters, pass an empty array
    $templateParams = ["John Doe"];  // No parameters needed for this template

    $result = $this->whatsappService->sendTemplateMessage(
        $recipientPhoneNumber,
        $templateName,
        $languageCode,
        $templateParams
    );

    return response()->json($result);
}

}
