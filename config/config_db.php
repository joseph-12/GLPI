
<?php
class DB extends DBmysql {
   //Dados do banco  "obs dados de loging padrao temporario para ateeste".
   public $dbhost = 'localhost';
   public $dbuser = 'root';
   public $dbpassword = '';
   public $dbdefault = 'dbglpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
