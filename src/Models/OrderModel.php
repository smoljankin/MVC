<?php

namespace App\Models;

class OrderModel extends Model {
    public function getAll() {
        $results = $this->db->query(
            'SELECT * FROM orders'
        );

        if (empty ($results)) {
            return [];
        }

        return $results;
    }

    public function getById($orderId) {
        $results = $this->db->queryWithParameters('
            SELECT o.id id, o.user_email email, oi.count count, p.name product_name, p.price price  
            FROM orders o
            JOIN order_items oi ON o.id = oi.order_id
            JOIN product p ON p.id = oi.product_id
            WHERE o.id = :id
        ', [':id' => $orderId]);

        if (empty ($results)) {
            return [];
        }

        return $results;
    }
}
