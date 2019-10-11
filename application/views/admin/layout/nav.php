<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- Menu Dasboard -->
        <li>
            <a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a>
        </li>

        <!-- Tentang Produsen -->
        <li>
            <a href="<?= base_url('admin/produsen') ?>"><i class="fa fa-user"></i> <span>Produsen</span></a>
        </li>

        <!-- Data Transaksi -->
        <li>
            <a href="<?= base_url('admin/transaksi') ?>"><i class="fa fa-check"></i> <span>Transaksi</span></a>
        </li>

        <!-- Menu Produk -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-sitemap"></i> <span>Produk</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/produk') ?>"><i class="fa fa-table"></i> Data Produk</a></li>
                <li><a href="<?= base_url('admin/produk/tambah') ?>"><i class="fa fa-plus"></i> Tambah Produk</a></li>
                <li><a href="<?= base_url('admin/kategori') ?>"><i class="fa fa-tags"></i> Kategori Produk</a></li>
            </ul>
        </li>

        <!-- Menu User -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-lock"></i> <span>Pengguna</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/user') ?>"><i class="fa fa-table"></i> Data Pengguna</a></li>
                <li><a href="<?= base_url('admin/user/tambah') ?>"><i class="fa fa-plus"></i> Tambah Pengguna</a></li>
            </ul>
        </li>

        <!-- Menu KOnfigurasi -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-wrench"></i> <span>Konfigurasi</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/konfigurasi') ?>"><i class="fa fa-home"></i> Konfigurasi Umum</a></li>
                <li><a href="<?= base_url('admin/konfigurasi/logo') ?>"><i class="fa fa-image"></i> Konfigurasi Logo</a></li>
                <li><a href="<?= base_url('admin/konfigurasi/icon') ?>"><i class="fa fa-home"></i> Konfigurasi Icon</a></li>
            </ul>
        </li>

        <!-- Rekening Bank -->
        <li>
            <a href="<?= base_url('admin/rekening') ?>"><i class="fa fa-dollar"></i> <span>Data Rekening</span></a>
        </li>

        <!-- Komentar Pelanggan -->
        <li>
            <a href="<?= base_url('admin/komentar') ?>"><i class="fa fa-comments"></i> <span>Komentar</span></a>
        </li>

        <!-- Backup Database -->
        <li>
            <a href="<?php echo base_url();?>backup/backupdb"><i class="fa  fa-database"></i> <span>Backup Database</span></a>
        </li>
       
    </ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Pengguna</a></li>
            <li class="active">Data pengguna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">