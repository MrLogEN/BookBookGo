<?php 

require_once __DIR__ . "/../authentication/AuthUtils.php";


class User{

    public int $id;
    public ?int $infoId;
    public string $email;
    public string $name;
    public ?string $password;
    public AuthRole $role;

    public function __construct(int $id, ?int $infoId,  string $email, string $name, ?string $password, AuthRole $role)
    {
        $this->id = $id;
        $this->infoId = $infoId;
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->role = $role;
    }

}


?>