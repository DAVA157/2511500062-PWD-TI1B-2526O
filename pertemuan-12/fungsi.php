<?php
function redirect_ke($url)
{
    header("Location: " . $url);
    exit();
}
function bersihkan($str)
{
    return htmlspecialchars(trim($str ?? ''));
}
function tidakKosong($str)
{
    return strlen(trim($str)) > 0;
}

function tampilkanBiodata($conf, $arr)
{
function formatTanggal($datetime) {
    if (empty($datetime)) return '-';
    return date('d-m-Y H:i:s', strtotime($datetime));
}
$html = "";
foreach ($conf as $k => $v) {
$label = $v["label"];
$nilai = bersihkan($arr[$k] ?? '');
$suffix = $v["suffix"];
$html .= "<p><strong>{$label}</strong> {$nilai}{$suffix}</p>";
}
return $html;
}
?>