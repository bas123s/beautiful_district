<?php

class conn_main_class {

//ประกาศตัวแปรที่ต้องใช้ใน class
    public $server_type = "mysql";
    public $servername = "172.28.254.128";
    public $username = "icad";
    public $password = "ic@d0317";
    //
    // public $servername = "localhost";
//  public $username = "root";
//  public $password = "";
    //
    public $dbname = "beautiful_district";
    public $app_id = "03000003";
    //public $app_name = 'ระบบรับแจ้งการควบคุมตัว ตามพระราชบัญญิติป้องกันและปราบปราม การทรมานและการกระทำให้บุคคลสูญหาย พ.ศ. 2565';
    public $app_name = 'โครงการอำเภอสวยงาม กรมการปกครอง';
    public $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_PERSISTENT => true);

//  public $app_theme = "../../vendor/w3css/w3-theme-lupis-blue.css";
}
