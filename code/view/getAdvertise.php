<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/function/service/' . 'AdService.php';

$advService = new \service\AdService();
$res = $advService->getAdvertiseList();
if (!$res) {
    echo 'Объявлений нет';
    return;
}
echo '<table>';
echo '<tr>';
echo "<td>Почта</td>";
echo "<td>Название</td>";
echo "<td>Описание</td>";
echo "<td>Категория</td>";
echo "<td>Дата</td>";
echo '</tr>';
foreach ($res as $adv) {
    echo '<tr>';
    echo "<td>{$adv['email']}</td>";
    echo "<td>{$adv['title']}</td>";
    echo "<td>{$adv['description']}</td>";
    echo "<td>{$adv['category']}</td>";
    echo "<td>{$adv['created']}</td>";
    echo '</tr>';
}
