<?php if(! defined('BASEPATH')) exit ('no direct access allowed');
 
class Backup extends CI_controller{
 
 
        public  function backupdb(){
        // Load Clas Utilitas Database
        $this->load->dbutil();
 
        // nyiapin aturan untuk file backup
        $aturan = array(    
                'format'      => 'zip',            
                'filename'    => 'my_db_backup.sql'
              );
 
 
        $backup =& $this->dbutil->backup($aturan);
 
        $nama_database = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $simpan = '/backup'.$nama_database;
 
        $this->load->helper('file');
        write_file($simpan, $backup);
 
 
        $this->load->helper('download');
        force_download($nama_database, $backup);
        }
       
}