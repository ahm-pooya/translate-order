<?php
foreach (@=grd_translate_offers as $row) {
    if ($row['check'] == '1') {
        @@translator_id = $row['name'];
        break;
    }
}