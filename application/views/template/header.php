<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $description ?>"/>
    <meta name="keywords" content="<?= $keywords ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('file/style/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('file/font-awesome/web-font/css/fontawesome-all.css') ?>"/>
    <script src="<?= base_url('file/style/js/menu.js'); ?>"></script>
    <script src="<?= base_url('file/style/js/waktu.js'); ?>"></script>
</head>
<body onload="startTime()">
<header>
    <div class="nweb"><a href='<?= base_url() ?>'>Nama Website / Logo</a></div>
</header>
<nav>
<div class="nvmenu" id="nav_atas">
<a href="#"><i class='fas fa-home'></i> Home</a>
<a href="#"><i class='fas fa-newspaper'></i> Berita</a>
<a href="#"><i class='fas fa-pencil-alt'></i> Artikel</a>
<a href="#"><i class='fas fa-calendar-check'></i> Agenda</a>
<a href="#"><i class='fas fa-cloud-download-alt'></i> Download</a>
<a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="menures()"><i class="fas fa-bars"></i></a>
</div>
</nav>
<div class="con-luar">
    <div class="tanggal">
        <table>
            <tr>
                <td><?= date('l') ?>, <?= date("d/m/Y"); ?></td>
                <td> : </td>
                <td> <div id="jam"></div> </td>
            </tr>
        </table>
    </div>
<div class="row">