<?php
$task_uid = '17644980468b06b8708ea32002405643';
$parent_case_id = @@APPLICATION;
$group_id = '41844537368b36e88738360031819041';
$process_id = @@PROCESS;
$translators = executeQuery("SELECT USR_UID FROM GROUP_USER WHERE GRP_UID = '$group_id'");
$vars = array(
    'txt_order' => @@txt_order,
    'parent_case_id' => $parent_case_id,
);
foreach ($translators as $user) {
    $translator_id = $user['USR_UID'];
    PMFNewCase($process_id, $translator_id, $task_uid, $vars, "TO_DO");
}
