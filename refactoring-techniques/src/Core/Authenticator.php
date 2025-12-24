<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $db = App::resolve(Database::class);

        $query = 'SELECT * FROM users WHERE email = :email';
        $params = [':email' => $email];
        $user = $db->query($query, $params)->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $this->login($user);

            return true;
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
            'id' => (int) $user['id']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        $_SESSION = [];
        $params = session_get_cookie_params();
        $expires = time() - 3_600;

        session_destroy();
        setcookie(
            'PHPSESSID',
            '',
            $expires,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }
}
