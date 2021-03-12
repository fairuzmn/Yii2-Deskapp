<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if(!$user) 
            {
                $this->addError($attribute, 'Username Tidak Ditemukan');
                
            }
            if ( !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Username dan Password Tidak Sesuai');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $user = $this->getUser();
            AuthAssignment::deleteAll(['user_id'=>$user->id]);
             
            if(Yii::$app->session->get('user_from') == 'simpeg') 
             {
               $role = new AuthAssignment;
               $role->item_name = 'pegawai';
               $role->user_id = $user->id;
               $role->save(false);
             } else {
                $role = new AuthAssignment;
                $role->item_name = 'mahasiswa';
                $role->user_id = $user->id;
                $role->save(false);
                  
             }

            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
