<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\rbac\Role;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $fistname
 * @property string $lastname
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property  string $rule
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['fistname', 'lastname'], 'string', 'max' => 15],
            [['username'], 'string', 'max' => 20],
            [['password'], 'string', 'max' =>60],
            [['authkey'], 'string', 'max' => 50],
            [['rule'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fistname' => 'Tên',
            'lastname' => 'Họ và tên',
            'username' => 'Tên đăng nhập',
            'password' => 'Mật khẩu',
            'authkey' => 'Authkey',
            'rule'=>'Quyền'
        ];
    }

    /**
     * Finds an identity by the given ID.
     * @param string|integer $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }


    public static function findIdentityByAccessToken($token, $type = null) {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented . ');
    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|integer an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->id;
    }/**
     * @return string
     */
    public function getFistname()
    {
        return $this->fistname;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return boolean whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
      return $this->authkey===$authKey;
    }

    /**
     * @param $username
     * @return null|static
     */
    public static function findByUsername($username) {
        return static::findOne(['username'=>$username]);
    }
    public static function getName($id)
    {
        return self::findOne($id)->fistname;
    }
    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password)
    {
       return $this->password===$password;
    }
    public function getTextRule($role)
    {
       IF($role==0)
           return 'admin';
        elseif ($role==1)
            return 'read';
        else
            return 'Unknown';
    }
}
