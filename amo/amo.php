<?php

require_once 'access.php';

$name = (isset($_POST['name']) && !empty($_POST['name'])) ? $_POST['name'] : 'isida.store';
$phone = (isset($_POST['tel']) && !empty($_POST['tel'])) ? $_POST['tel'] : '1111';
$email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : 'test@gmail.com';
$target = ' ';
$company = 'vakk.site';

$step_1 = (isset($_POST['step-1']) && !empty($_POST['step-1'])) ? $_POST['step-1'] : '';
$step_2 = (isset($_POST['step-2']) && !empty($_POST['step-2'])) ? $_POST['step-2'] : '';
$step_3 = (isset($_POST['step-3']) && !empty($_POST['step-3'])) ? $_POST['step-3'] : '';
$step_4 = (isset($_POST['step-4']) && !empty($_POST['step-4'])) ? $_POST['step-4'] : '';
$step_5 = (isset($_POST['step-5']) && !empty($_POST['step-5'])) ? $_POST['step-5'] : '';

$custom_field_id = 692173;
$custom_field_value = 'тест';

$ip = '185.68.16.134';
$domain = 'vakk.site';
$pipeline_id = 4295311;
$user_amo = 6463951;

$utm_source   = (isset($_POST['utm_source']) && !empty($_POST['utm_source'])) ? $_POST['utm_source'] : '';
$utm_content  = (isset($_POST['utm_content']) && !empty($_POST['utm_content'])) ? $_POST['utm_content'] : '';
$utm_medium   = (isset($_POST['utm_medium']) && !empty($_POST['utm_medium'])) ? $_POST['utm_medium'] : '';
$utm_campaign = (isset($_POST['utm_campaign']) && !empty($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : '';
$utm_term     = (isset($_POST['utm_term']) && !empty($_POST['utm_term'])) ? $_POST['utm_term'] : '';
$utm_referrer = '';

$data = [
    [
        "name" => $phone,
        "status_id" => 40165279, // вот id колонки
        "responsible_user_id" => (int) $user_amo,
        "pipeline_id" => (int) $pipeline_id, // вот id воронки
        "_embedded" => [
            "contacts" => [
                [
                    "first_name" => $name,
                    "custom_fields_values" => [
                        [
                            "field_code" => "EMAIL",
                            "values" => [
                                [
                                    "enum_code" => "WORK",
                                    "value" => $email
                                ]
                            ]
                        ],
                        [
                            "field_code" => "PHONE",
                            "values" => [
                                [
                                    "enum_code" => "WORK",
                                    "value" => $phone
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            "companies" => [
                [
                    "name" => $company
                ]
            ]
        ],
        "custom_fields_values" => [
            [
                "field_id" => 1058367,
                "values" => [
                    [
                        "value" => $step_1
                    ]
                ]
            ],
            [
                "field_id" => 1058359,
                "values" => [
                    [
                        "value" => $step_2
                    ]
                ]
            ],
            [
                "field_id" => 1058361,
                "values" => [
                    [
                        "value" => $step_3
                    ]
                ]
            ],
            [
                "field_id" => 1058363,
                "values" => [
                    [
                        "value" => $step_4
                    ]
                ]
            ],
            [
                "field_id" => 1058365,
                "values" => [
                    [
                        "value" => $step_5
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_SOURCE',
                "values" => [
                    [
                        "value" => $utm_source
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_CONTENT',
                "values" => [
                    [
                        "value" => $utm_content
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_MEDIUM',
                "values" => [
                    [
                        "value" => $utm_medium
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_CAMPAIGN',
                "values" => [
                    [
                        "value" => $utm_campaign
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_TERM',
                "values" => [
                    [
                        "value" => $utm_term
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_REFERRER',
                "values" => [
                    [
                        "value" => $utm_referrer
                    ]
                ]
            ],
        ],
    ]
];

//$method = "/api/v4/leads";
$method = "/api/v4/leads/complex";

$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token,
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, "https://$subdomain.amocrm.ru".$method);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, 'amo/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, 'amo/cookie.txt');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$code = (int) $code;
$errors = [
    301 => 'Moved permanently.',
    400 => 'Wrong structure of the array of transmitted data, or invalid identifiers of custom fields.',
    401 => 'Not Authorized. There is no account information on the server. You need to make a request to another server on the transmitted IP.',
    403 => 'The account is blocked, for repeatedly exceeding the number of requests per second.',
    404 => 'Not found.',
    500 => 'Internal server error.',
    502 => 'Bad gateway.',
    503 => 'Service unavailable.'
];

if ($code < 200 || $code > 204) die( "Error $code. " . (isset($errors[$code]) ? $errors[$code] : 'Undefined error') );


$Response = json_decode($out, true);
$Response = $Response['_embedded']['items'];
$output = 'ID добавленных элементов списков:' . PHP_EOL;
foreach ($Response as $v)
    if (is_array($v))
        $output .= $v['id'] . PHP_EOL;

if ($output) header("Location: /?success=1");