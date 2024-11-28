
  <?php
  
  class UserInfo extends DBObject  {

    public $id;
    public $user_id;
    public $address;
    public $contact_numbers;

    
    protected static $table = "user_infos";

    public static $fields = array('id', 'user_id', 'address', 'contact_numbers');

  }
  
  
  ?>