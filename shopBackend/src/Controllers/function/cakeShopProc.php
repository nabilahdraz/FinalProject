<?php 
//FOR ADMIN FUCNYUINON
//get all admin 
function getAllAdmin($db) {

    $sql = 'Select * FROM admin '; 
    $stmt = $db->prepare ($sql); 
    $stmt ->execute(); 
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
} 

//get admin by id 
function getAdmin($db, $adminId) {

    $sql = 'Select a.adminName, a.password, a.username, a.email FROM admin a  ';
    $sql .= 'Where a.id = :id';
    $stmt = $db->prepare ($sql);
    $id = (int) $adminId;
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 

}

//add new admin 
function createAdmin($db, $form_data) { 
    
    $sql = 'Insert into admin (adminName, password, username, email)'; 
    $sql .= 'values (:adminName, :password, :username, :email)';  
    $stmt = $db->prepare ($sql); 
    $stmt->bindParam(':adminName', $form_data['adminName']); 
    $stmt->bindParam(':password', $form_data['password']);  
    $stmt->bindParam(':username', ($form_data['username']));  
    $stmt->bindParam(':email', ($form_data['email']));
    $stmt->execute(); 
    return $db->lastInsertID();
}


//delete admin by id 
function deleteAdmin($db,$adminId) { 

    $sql = ' Delete from admin where id = :id';
    $stmt = $db->prepare($sql);  
    $id = (int)$adminId; 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute(); 
} 

//update admin by id 
function updateAdmin($db,$form_dat,$adminId) { 

    $sql = 'UPDATE admin SET adminName = :adminName , password = :password , username = :username , email = :email'; 
    $sql .=' WHERE id = :id'; 
    $stmt = $db->prepare ($sql); 
    $id = (int)$adminId; 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->bindParam(':adminName', $form_dat['adminName']); 
    $stmt->bindParam(':password', $form_dat['password']); 
    $stmt->bindParam(':username', ($form_dat['username'])); 
    $stmt->bindParam(':email',($form_dat['email']));
    $stmt->execute(); 
}

//FOR CUSTOMER FUNCTION
//get all customer 
function getAllCustomers($db) {

    $sql = 'Select * FROM customers '; 
    $stmt = $db->prepare ($sql); 
    $stmt ->execute(); 
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
} 

//get customer by id 
function getCustomer($db, $customerId) {

    $sql = 'Select c.custName, c.password, c.username, c.email FROM customers c  ';
    $sql .= 'Where c.id = :id';
    $stmt = $db->prepare ($sql);
    $id = (int) $customerId;
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 

}

//add new customer 
function createCustomer($db, $form_data) { 
    
    $sql = 'Insert into customers (custName, password, username, email)'; 
    $sql .= 'values (:custName, :password, :username, :email)';  
    $stmt = $db->prepare ($sql); 
    $stmt->bindParam(':custName', $form_data['custName']); 
    $stmt->bindParam(':password', $form_data['password']);  
    $stmt->bindParam(':username', ($form_data['username']));  
    $stmt->bindParam(':email', ($form_data['email']));
    $stmt->execute(); 
    return $db->lastInsertID();
}


//delete cuustomer by id 
function deleteCustomer($db,$customerId) { 

    $sql = ' Delete from customers where id = :id';
    $stmt = $db->prepare($sql);  
    $id = (int)$customerId; 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute(); 
} 

//update customer by id 
function updateCustomer($db,$form_dat,$customerId) { 

    $sql = 'UPDATE customers SET custName = :custName , password = :password , username = :username , email = :email'; 
    $sql .=' WHERE id = :id'; 
    $stmt = $db->prepare ($sql); 
    $id = (int)$customerId; 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->bindParam(':custName', $form_dat['custName']); 
    $stmt->bindParam(':password', $form_dat['password']); 
    $stmt->bindParam(':username', ($form_dat['username'])); 
    $stmt->bindParam(':email',($form_dat['email']));
    $stmt->execute(); 
}

// FOR ORDER FUNCTION
//get all order 
function getAllOrders($db) {

    
    $sql = 'Select * FROM orders '; 
    $stmt = $db->prepare ($sql); 
    $stmt ->execute(); 
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
} 

//get order by id 
function getOrder($db, $orderId) {

    $sql = 'Select o.customerName, o.orderCakeName, o.orderDate, o.finishDate, o.total FROM orders o  ';
    $sql .= 'Where o.id = :id';
    $stmt = $db->prepare ($sql);
    $id = (int) $orderId;
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 

}

//add new order 
function createOrder($db, $form_data) { 
    //stop at sisni
    $sql = 'Insert into orders ( customerName, orderCakeName, orderDate, finishDate, total)'; 
    $sql .= 'values (:customerName, :orderCakeName, :orderDate, :finishDate, :total)';  
    $stmt = $db->prepare ($sql); 
    $stmt->bindParam(':customerName', $form_data['customerName']);  
    $stmt->bindParam(':orderCakeName', ($form_data['orderCakeName']));
    $stmt->bindParam(':orderDate', ($form_data['orderDate']));
    $stmt->bindParam(':finishDate', ($form_data['finishDate']));
    $stmt->bindParam(':total', ($form_data['total']));
    $stmt->execute(); 
    return $db->lastInsertID();
}


//delete cuustomer by id 
function deleteOrder($db,$orderId) { 

    $sql = ' Delete from orders where id = :id';
    $stmt = $db->prepare($sql);  
    $id = (int)$orderId; 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute(); 
} 

//update order by id 
function updateOrder($db,$form_dat,$orderId) { 

    
    $sql = 'UPDATE orders SET customerName = :customerName , orderCakeName = :orderCakeName , orderDate = :orderDate , finishDate = :finishDate , total = :total'; 
    $sql .=' WHERE id = :id'; 
    $stmt = $db->prepare ($sql); 
    $id = (int)$orderId;  
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':customerName', $form_dat['customerName']);    
    $stmt->bindParam(':orderCakeName', ($form_dat['orderCakeName']));
    $stmt->bindParam(':orderDate', ($form_dat['orderDate']));
    $stmt->bindParam(':finishDate', ($form_dat['finishDate']));
    $stmt->bindParam(':total', ($form_dat['total']));
    $stmt->execute(); 
}


