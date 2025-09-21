<?php
$task_uid = '17644980468b06b8708ea32002405643';
$group_id = '21435359168d0655a3b1ee9098721494';
$process_id = @@PROCESS;
$translators = executeQuery("SELECT USR_UID FROM GROUP_USER WHERE GRP_UID = '$group_id'");
$vars = array(
    'txt_order' => @@txt_order,
);
foreach ($translators as $user) {
    $translator_id = $user['USR_UID'];
    PMFNewCase($process_id, $translator_id, $task_uid, $vars, "TO_DO");
}
