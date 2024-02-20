<?

class LoginAuthentication
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function authenticate($username, $password)
    {
        $username = $this->database->escape($username);
        $password = $this->database->escape($password);

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->database->query($sql);

        if ($result->num_rows === 1) {
            // Authentication successful
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }
}
