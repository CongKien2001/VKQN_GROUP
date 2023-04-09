<?php

use PHPUnit\Framework\TestCase;

class MomoPayTest extends TestCase
{
    public function testSuccessfulPayment()
    {
        // Tạo đối tượng MomoPay
        $momoPay = new MomoPay();

        // Tạo thông tin thanh toán
        $paymentInfo = [
            'amount' => 100000,
            'orderId' => 'ORDER123',
            'description' => 'Thanh toán đơn hàng ORDER123'
        ];

        // Thực hiện thanh toán và kiểm tra kết quả
        $result = $momoPay->makePayment($paymentInfo);
        $this->assertTrue($result['success']);
        $this->assertEquals($result['message'], 'Payment successful');
    }

    public function testFailedPayment()
    {
        // Tạo đối tượng MomoPay
        $momoPay = new MomoPay();

        // Tạo thông tin thanh toán không hợp lệ
        $paymentInfo = [
            'amount' => -100000,
            'orderId' => '',
            'description' => ''
        ];

        // Thực hiện thanh toán và kiểm tra kết quả
        $result = $momoPay->makePayment($paymentInfo);
        $this->assertFalse($result['success']);
        $this->assertNotEmpty($result['message']);
    }
}

// Lớp MomoPay
class MomoPay
{
    public function makePayment($paymentInfo)
    {
        // Xử lý thanh toán
        // 

        // Trả về kết quả
        return [
            'success' => true,
            'message' => 'Payment successful'
        ];
    }
}
//testSuccessfulPayment
//testFailedPayment