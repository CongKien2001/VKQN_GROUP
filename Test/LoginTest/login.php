<?php
require_once 'test.php'; // chứa hàm đăng nhập
require_once 'PHPUnit\Framework\test.php'; // sử dụng PHPUnit để viết unit test

class LoginTest extends LoginTest
{
    public function testValidLogin()
    {
        // arrange
        $username = 'admin';
        $password = 'password';

        // act
        $result = login($username, $password);

        // assert
        $this->assertTrue($result);
    }

    public function testInvalidLogin()
    {
        // arrange
        $username = 'admin';
        $password = 'wrong_password';

        // act
        $result = login($username, $password);

        // assert
        $this->assertFalse($result);
    }

    public function testEmptyFields()
    {
        // arrange
        $username = '';
        $password = '';

        // act
        $result = login($username, $password);

        // assert
        $this->assertFalse($result);
    }
}
