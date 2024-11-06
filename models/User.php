<?php

namespace app\models;
use yii\data\SqlDataProvider;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface {

    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    /**/
    public $role;

    public static function isUserAdmin($id) {
        if (Espectadores::findOne(['id_usuario' => $id, 'activate' => '1', 'role' => 2])) {
            return true;
        } else {

            return false;
        }
    }

    public static function isUserSimple($id) {
        if (Espectadores::findOne(['id_usuario' => $id, 'activate' => '1', 'role' => 1])) {
            return true;
        } else {

            return false;
        }
    }
//    public function authenticate(){
//        $conexion = Yii::app()->db;
//        
//        $consulta = "select usuario, contrasena_espe from espectadores";
//        $consulta .="Where usuario ='".$this->username."' and ";
//        $consulta .="contrasena_espe'".$this->password."' and active=1";
//        
//        $resultado = $conexion->createCommand($consulta)->query();
//        
//        $resultado->bindColum(1,$this->username);
//        $resultado->bindColum(1,$this->password);
//        
//        while ($resultado->read()!==false){
//            $this->errorCode = self::ERROR_NONE;
//            return !$this->errorCode;
//        }
//    }
/**/
    private static $users = [
        
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
            'role' => '2',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
            'role' => '1',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id) {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey() {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->password === $password;
    }

}
