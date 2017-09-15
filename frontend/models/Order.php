<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $email
 * @property string $phone_number
 * @property string $address
 * @property integer $payment_id
 * @property integer $delivery_id
 * @property string $username_shipper
 * @property string $email_shipper
 * @property string $phone_number_shipper
 * @property string $address_shipper
 * @property string $request
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property OrderDetails[] $orderDetails
 * @property Deliveries $delivery
 * @property Payments $payment
 * @property Users $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'email', 'phone_number', 'address', 'payment_id', 'delivery_id', 'username_shipper', 'email_shipper', 'phone_number_shipper', 'address_shipper', 'request', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'payment_id', 'delivery_id', 'created_at', 'updated_at'], 'integer'],
            [['username', 'email', 'phone_number', 'address', 'username_shipper', 'email_shipper', 'phone_number_shipper', 'address_shipper', 'request'], 'string', 'max' => 255],
            [['delivery_id'], 'exist', 'skipOnError' => true, 'targetClass' => Delivery::className(), 'targetAttribute' => ['delivery_id' => 'id']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'username' => 'Username',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'payment_id' => 'Payment ID',
            'delivery_id' => 'Delivery ID',
            'username_shipper' => 'Username Shipper',
            'email_shipper' => 'Email Shipper',
            'phone_number_shipper' => 'Phone Number Shipper',
            'address_shipper' => 'Address Shipper',
            'request' => 'Request',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDelivery()
    {
        return $this->hasOne(Delivery::className(), ['id' => 'delivery_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
