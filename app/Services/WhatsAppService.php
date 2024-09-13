<?php

namespace App\Services;

use GuzzleHttp\Client;

class WhatsAppService
{
    protected $client;
    protected $token;
    protected $apiUrl;

    public function __construct()
    {
        // Your WhatsApp Cloud API token and API URL
        $this->token = 'EAALBlIZC2KugBO3TqXvH8xMuv0S1gEZBDMbI8ei7fY80jxUTJP32NIFZB3LTXYh6vueI31Rqi3RTYY8Q3OZA4ZCrIdfihQ80vDSFnz9XjjxFsFCVxIZBau3kFKwgwezAOVqcpQv2BZC2dUUEbsi6nZAol1gQ59XVJTLbm3MJf4xeZAaJpalH6e0MhHfJwVAxj949Uyk2ivPBMhQ3YO7Gjg91bo7D67S8ZD';
        $this->apiUrl = 'https://graph.facebook.com/v20.0/106515958813804/messages';  // Replace `your_phone_number_id` with your WhatsApp number ID
        $this->client = new Client();
    }

    public function sendMessage($recipientPhoneNumber, $message)
    {
        try {
            $response = $this->client->post($this->apiUrl, [
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'messaging_product' => 'whatsapp',
                    'to'                => $recipientPhoneNumber,
                    'type'              => 'text',
                    'text'              => [
                        'body' => $message
                    ]
                ]
            ]);

            return json_decode($response->getBody()->getContents());
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function sendTemplateMessage($recipientPhoneNumber, $templateName, $languageCode, $templateParams = [])
    {
        try {
            // Base JSON for the request
            $requestData = [
                'messaging_product' => 'whatsapp',
                'to'                => $recipientPhoneNumber,
                'type'              => 'template',
                'template'          => [
                    'name'     => $templateName,
                    'language' => [
                        'code' => $languageCode // E.g. "en_US"
                    ]
                ]
            ];

            // Only add components if there are template params
            if (!empty($templateParams)) {
                $requestData['template']['components'] = [
                    [
                        'type'       => 'body',
                        'parameters' => $this->formatTemplateParams($templateParams),
                    ]
                ];
            }

            // Send the request
            $response = $this->client->post($this->apiUrl, [
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                    'Content-Type'  => 'application/json',
                ],
                'json' => $requestData
            ]);

            return json_decode($response->getBody()->getContents());
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    private function formatTemplateParams($params)
    {
        return array_map(function($param) {
            return ['type' => 'text', 'text' => $param];
        }, $params);
    }

    public function fetchTemplates()
    {
        try {
            // API URL to fetch templates (replace with your actual WhatsApp Business Account ID)
            $fetchTemplatesUrl = 'https://graph.facebook.com/v20.0/100312472780596/message_templates';

            // Send the request
            $response = $this->client->get($fetchTemplatesUrl, [
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                    'Content-Type'  => 'application/json',
                ]
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
