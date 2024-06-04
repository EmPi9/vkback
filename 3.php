<?php

interface OrderServiceInterface {
    public function createOrder(int $userId, array $items): Order;
    public function getOrderStatus(int $orderId): string;
}

class OrderService implements OrderServiceInterface {
    protected $orderRepository;
    protected $productRepository;
    protected $warehouseRepository;
    protected $logisticsService;

    public function __construct(
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
        WarehouseRepository $warehouseRepository,
        LogisticsService $logisticsService
    ) {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->logisticsService = $logisticsService;
    }

    public function createOrder(int $userId, array $items): Order {
        // Логика создания заказа
        // Валидация и проверка наличия товаров на складах
        // Регистрация заказа в логистической системе
    }

    public function getOrderStatus(int $orderId): string {
        // Логика получения статуса заказа из логистической системы
    }
}

class Order {
    protected $id;
    protected $userId;
    protected $items;
    protected $status;
    protected $createdAt;

    // Геттеры и сеттеры
}

class OrderRepository {
    public function save(Order $order) {
        // Логика сохранения заказа в базе данных
    }

    public function find(int $orderId): Order {
        // Логика поиска заказа в базе данных
    }
}

class ProductRepository {
    public function find(int $productId): Product {
        // Логика поиска товара в базе данных
    }
}

class WarehouseRepository {
    public function findStock(int $productId, int $warehouseId): int {
        // Логика поиска наличия товара на складе
    }
}

class LogisticsService {
    public function registerDelivery(Order $order): string {
        // Логика регистрации доставки в логистической системе
    }

    public function getDeliveryStatus(int $orderId): string {
        // Логика получения статуса доставки
    }
}
?>
