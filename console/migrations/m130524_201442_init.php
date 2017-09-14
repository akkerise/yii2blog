<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'full_name' => $this->string()->unique(),
            'phone_number' => $this->string()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string()->notNull(),
            'category_name' => $this->string()->notNull(),
            'parent_id' => $this->smallInteger()->notNull()->defaultValue(1),
            'keywords' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%brands}}', [
            'id' => $this->primaryKey(),
            'brand_name' => $this->string()->notNull(),
            'brand_phone_number' => $this->integer()->notNull(),
            'brand_address' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%colors}}', [
            'id' => $this->primaryKey(),
            'color_name' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%sizes}}', [
            'id' => $this->primaryKey(),
            'size_name' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%payments}}', [
            'id' => $this->primaryKey(),
            'payment_name' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%deliveries}}', [
            'id' => $this->primaryKey(),
            'delivery_name' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%materials}}', [
            'id' => $this->primaryKey(),
            'material_name' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%rates}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'star' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'product_name' => $this->string()->notNull(),
            'product_code' => $this->string()->notNull(),
            'product_image' => $this->string()->notNull(),
            'product_price' => $this->string()->notNull(),
            'product_sale_off' => $this->string(),
            'begin_date_sale_off' => $this->integer(),
            'end_date_sale_off' => $this->integer(),
            'category_id' => $this->integer()->notNull(),
            'brand_id' => $this->integer()->notNull(),
            'size_id' => $this->integer()->notNull(),
            'color_id' => $this->integer()->notNull(),
            'material_id' => $this->integer()->notNull(),
            'rate_id' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'keyword' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone_number' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'payment_id' => $this->integer()->notNull(),
            'delivery_id' => $this->integer()->notNull(),
            'username_shipper' => $this->string()->notNull(),
            'email_shipper' => $this->string()->notNull(),
            'phone_number_shipper' => $this->string()->notNull(),
            'address_shipper' => $this->string()->notNull(),
            'request' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%order_details}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'product_price' => $this->string()->notNull(),
            'product_quantity' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1), // 1. New Order , 2. Shipping , 3. Done , 4. Destroy
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%images}}', [
            'id' => $this->primaryKey(),
            'image_name' => $this->string()->notNull(),
            'image_src' => $this->string()->notNull(),
            'blog_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%blogs}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'keyword' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'tag_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%tags}}', [
            'id' => $this->primaryKey(),
            'tag_name' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);


        // Add Foreign Key
        $this->addForeignKey('FK_PRODUCTS_CATEGORY', 'products', 'category_id', 'categories', 'id');
        $this->addForeignKey('FK_PRODUCTS_BRAND', 'products', 'brand_id', 'brands', 'id');
        $this->addForeignKey('FK_PRODUCTS_SIZE', 'products', 'size_id', 'sizes', 'id');
        $this->addForeignKey('FK_PRODUCTS_COLOR', 'products', 'color_id', 'colors', 'id');
        $this->addForeignKey('FK_PRODUCTS_MATERIAL', 'products', 'material_id', 'materials', 'id');
        $this->addForeignKey('FK_PRODUCTS_RATE', 'products', 'rate_id', 'rates', 'id');

        $this->addForeignKey('FK_ORDERS_PAYMENT', 'orders', 'payment_id', 'payments', 'id');
        $this->addForeignKey('FK_ORDERS_DELIVERY', 'orders', 'delivery_id', 'deliveries', 'id');
        $this->addForeignKey('FK_ORDERS_USER', 'orders', 'user_id', 'users', 'id');

        $this->addForeignKey('FK_ORDER_DETAILS_ORDER', 'order_details', 'order_id', 'orders', 'id');
        $this->addForeignKey('FK_ORDER_DETAILS_PRODUCT', 'order_details', 'product_id', 'products', 'id');

        $this->addForeignKey('FK_RATES_USER', 'rates', 'user_id', 'users', 'id');

        $this->addForeignKey('FK_BLOGS_USER', 'blogs', 'user_id', 'users', 'id');
        $this->addForeignKey('FK_BLOGS_TAG', 'blogs', 'tag_id', 'tags', 'id');
        $this->addForeignKey('FK_BLOGS_IMAGE', 'blogs', 'image_id', 'images', 'id');

    }

    public function down()
    {
        $this->dropTable('{{%rates}}');
        $this->dropTable('{{%users}}');
        $this->dropTable('{{%categories}}');
        $this->dropTable('{{%brands}}');
        $this->dropTable('{{%colors}}');
        $this->dropTable('{{%sizes}}');
        $this->dropTable('{{%payments}}');
        $this->dropTable('{{%deliveries}}');
        $this->dropTable('{{%materials}}');
        $this->dropTable('{{%products}}');
        $this->dropTable('{{%orders}}');
        $this->dropTable('{{%order_details}}');
        $this->dropTable('{{%blogs}}');
        $this->dropTable('{{%tags}}');
        $this->dropTable('{{%images}}');
    }
}
