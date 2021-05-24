<?php
include('dbh.class.php');

class Admin extends Dbh
{
    public function getadmin()
    {
        $sql = "SELECT * FROM admins";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function addadmin($name, $email, $Created_date, $username, $password)
    {
        $sql = "INSERT INTO admins(Name, Email, Created_date, Username, Password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $Created_date, $username, $password]);
    }

    public function editadmin($id)
    {
        $sql = "SELECT * FROM admins WHERE User_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        return $result;
    }

    public function updateadmin($name, $username, $email, $password, $Created_date, $id)
    {
        $sql = "UPDATE admins SET Name = ?, Email = ?, Username = ?, Password=?, Created_date=? WHERE User_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $username, $email, $password, $Created_date, $id]);
    }
    public function deleteadmin($id)
    {
        $sql = "DELETE FROM admins WHERE User_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function numberofadmin()
    {
        $sql = "SELECT * FROM admins";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount();
    }
}
class Doctor extends Dbh
{
    public function NumberOfDoctors()
    {
        $sql = "SELECT * FROM doctors";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount();
    }
    public function getdoctors()
    {
        $sql = "SELECT * FROM doctors";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function adddoctor($name, $age, $phone, $email, $address, $username, $password)
    {
        $sql = "INSERT INTO doctors(Dr_Name, Dr_Age, Dr_Phone, Dr_Email, Dr_Address, Username, Password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $age, $phone, $email, $address, $username, $password]);
    }
    public function editdoctor($id)
    {
        $sql = "SELECT * FROM doctors WHERE Dr_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }
    public function deletedoctor($id)
    {
        $sql = "DELETE FROM doctors WHERE DR_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function updatedoctor($name, $age, $phone, $email, $address, $username, $password, $Created_date, $id)
    {
        $sql = "UPDATE doctors SET Dr_Name = ?, Dr_Age = ?, Dr_Phone = ?, Dr_Email = ?, Dr_Address = ?, Username = ?, Password = ?, Created_date = ? WHERE Dr_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $age, $phone, $email, $address, $username, $password, $Created_date, $id]);
    }
}
class Deptartment extends Dbh
{
    public function getdeptname()
    {
        $sql = "SELECT Dept_Name FROM departments";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function getdept()
    {
        $sql = "SELECT * FROM departments";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function adddept($name)
    {
        $sql = "INSERT INTO departments(Dept_Name) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
    }
    public function deletedept($id)
    {
        $sql = "DELETE FROM departments WHERE Dept_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function NumberOfDepts()
    {
        $sql = "SELECT * FROM departments";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount();
    }
    public function editdept($id)
    {
        $sql = "SELECT * FROM departments WHERE Dept_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }
    public function updatedept($name, $id)
    {
        $sql = "UPDATE departments SET Dept_Name = ?  WHERE Dept_ID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $id]);
    }
}
class Patient extends Dbh
{
    public function getPatient()
    {
        $sql = "SELECT * FROM patients";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function addPatient($name, $phone, $email, $address, $username, $password)
    {
        $sql = "INSERT INTO patients (Pa_Name, Pa_Phone, Pa_Email, Pa_Address, Username, Password) 
        VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $passwordEnc = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$name, $phone, $email, $address, $username, /*$passwordEnc*/ $password]);
    }

    public function editPatient($id)
    {
        $sql = "SELECT * FROM patients WHERE Pa_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        return $result;
    }

    public function updatePatient($name, $username, $email, $password, $phone, $address, $id)
    {
        $sql = "UPDATE patients SET Pa_Name = ?, Username = ?, Pa_Email = ?, Password=?,Pa_Phone = ?, Pa_address = ?  WHERE Pa_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $username, $email, $password, $phone, $address, $id]);
    }
    public function deletePatient($id)
    {
        $sql = "DELETE FROM patients WHERE Pa_Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function NumberOfPatients()
    {
        $sql = "SELECT * FROM patients";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount();
    }
}
class Authentication extends Dbh
{

    public function LoginAdmin($username, $password)
    {

        $sql = "SELECT * FROM admins WHERE (Username = ?  or Email = ? ) And Password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $username, $password]);
        foreach ($stmt->fetchAll() as $row) {
            $ID = $row['User_Id'];
        }
        return $ID;
    }
    public function LoginDoctor($username, $password)
    {
        $sql = "SELECT * FROM doctors WHERE (Username = ?  or Dr_Email = ? ) And Password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $username, $password]);
        $result = $stmt->rowCount();
        return $result;
    }
    public function LoginPatient($username, $password)
    {
        $sql = "SELECT * FROM patients WHERE (Username = ?  or Pa_Email = ? ) And Password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $username, $password]);
        $result = $stmt->rowCount();
        $list = array();
        foreach ($stmt->fetchAll() as $row) {
            if (password_verify($password, $row['Password'])) {
                $list['id'] = $row['Pa_Id'];
            }

            $list['password'] = $row['Password'];
        }
        return $list;
    }
}
class ContactUs extends Dbh
{
    public function sendmessage($name, $email, $message)
    {
        $sql = "INSERT INTO messages (Name, Email, Message) 
        VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $message]);
    }
    public function numberofmessages()
    {
        $sql = "SELECT * FROM messages";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount();
    }
    public function getmessages()
    {
        $sql = "SELECT * FROM messages";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function deletemessage($id)
    {
        $sql = "DELETE FROM messages WHERE Id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
class Consulting extends Dbh
{
}

class Validation extends Dbh
{
    public function emptyInputs($name, $phone, $email, $address, $username, $password)
    {
        if (empty($name) || empty($phone) || empty($email) || empty($address) || empty($username) || empty($password)) {
            return;
        }
    }
    public function invalidPassword($password)
    {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $password)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    public function invalidEmail($email)
    {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    public function passwordMatch($password, $rePassword)
    {
        $result;
        if ($password !== $rePassword) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    public function usernameExist($username)
    {
        $sql = "SELECT * FROM patients WHERE Username = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $result = $stmt->rowCount();//Deleted
        if ($stmt->rowCount()) {
            foreach ($stmt->fetchAll() as $row) {
                return $row;
            }
        } else {
            return 0;
        }
    }

    public function emailExist($email)
    {
        $sql = "SELECT * FROM patients WHERE Pa_Email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->rowCount();//Deleted
        if ($stmt->rowCount()) {
            foreach ($stmt->fetchAll() as $row) {
                return $row;
            }
        } else {
            return 0;
        }
    }
}
