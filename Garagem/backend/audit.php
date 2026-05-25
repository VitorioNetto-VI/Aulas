<?php
// audit.php - Sistema de log de ações
function audit($pdo, $userId, $action, $details = null) {
    try {
        $stmt = $pdo->prepare("
            INSERT INTO audit_log (user_id, action, details, ip_address, user_agent) 
            VALUES (?, ?, ?, ?, ?)
        ");
        
        $stmt->execute([
            $userId,
            $action,
            $details,
            $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            $_SERVER['HTTP_USER_AGENT'] ?? 'unknown'
        ]);
        
        return true;
    } catch (Exception $e) {
        error_log("Erro no audit: " . $e->getMessage());
        return false;
    }
}

// Criar tabela audit_log se não existir
function createAuditTable($pdo) {
    $sql = "CREATE TABLE IF NOT EXISTS audit_log (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT,
        action VARCHAR(255),
        details TEXT,
        ip_address VARCHAR(45),
        user_agent TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_user (user_id),
        INDEX idx_action (action),
        INDEX idx_created_at (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    try {
        $pdo->exec($sql);
    } catch (PDOException $e) {
        error_log("Erro ao criar tabela audit_log: " . $e->getMessage());
    }
}
?>