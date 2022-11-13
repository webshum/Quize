<?php 

require __DIR__ . '/vendor/autoload.php';



try {
    $amo = new \AmoCRM\Client('zdoroviyruh', 'taras.mamchur.tm@gmail.com', '93e1b4ed48d7ea7ce68f0dea9bad9d61f951a090');

    $account = $amo->account;

    // echo "<pre>";
    // print_r($account->apiCurrent());
    // echo "</pre>";
    
    $amo->fields->StatusId = 31866718;
    $amo->fields->ResponsibleUserId = 3032971;
    $comments = 'Крок 1: ' . $_POST['step-1'];
    $comments .= ', Крок 2: ' . $_POST['step-2'];
    $comments .= ', Крок 3: ' . $_POST['step-3'];
    $comments .= ', Крок 4: ' . $_POST['step-4'];
    $comments .= ', Крок 5: ' . $_POST['step-5'];

    $utm_source = $_POST['utm_source'];
    $utm_medium = $_POST['utm_medium'];
    $utm_campaign = $_POST['utm_campaign'];
    $utm_term = $_POST['utm_term'];
    $utm_content = $_POST['utm_content'];

    // Добавление сделок с использованием хелпера
    $lead = $amo->lead;
    $lead['name'] = 'Quize';
    $lead['status_id'] = $amo->fields->StatusId;
    $lead['responsible_user_id'] = $amo->fields->ResponsibleUserId;
    $id = $lead->apiAdd();

    // добавляем контакт
    $contact = $amo->contact;
    
    $contact["name"] = $_POST['name'];
    $contact['linked_leads_id'] = [(int)$id];
    $contact->addCustomField(242963, $_POST['tel'], 'MOB');
    $contact->addCustomField(242965, $_POST['email'], 'WORK');
    $contact->addCustomField(243059, $comments);

    $contact->addCustomField(707671, $utm_source);
    $contact->addCustomField(707673, $utm_medium);
    $contact->addCustomField(707669, $utm_campaign);
    $contact->addCustomField(707663, $utm_term);
    $contact->addCustomField(707667, $utm_content);

    $contact['responsible_user_id'] = $amo->fields->ResponsibleUserId;
    
    $id = $contact->apiAdd(); // добавили контакт

    // echo "<pre>";
    // print_r($_POST);
    // print_r($_SERVER);
    // echo "</pre>";

   	if ($id) header("Location: /?success=1");

} catch (\AmoCRM\Exception $e) {
    printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
}