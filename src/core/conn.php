<?php

$conn = null;
try {
    // Check if database config is available
    if (!isset($config['db'])) {
        throw new Exception("Database configuration not found");
    }

    $conn = new PDO(
        "mysql:host=" . $config['db']['host'] .
        ";dbname=" . $config['db']['name'] .
        ";port=" . $config['db']['port'],
        $config['db']['username'],
        $config['db']['password']
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    error_log("Database Connection failed: " . $e->getMessage());

    // For local development, show a user-friendly error
    if (ini_get('display_errors') == '1') {
        echo "<h1>Database Connection Error</h1>";
        echo "<p>Could not connect to database. Please check:</p>";
        echo "<ul>";
        echo "<li>MySQL/MariaDB is running in Laragon</li>";
        echo "<li>Database 'vetsync' exists</li>";
        echo "<li>Database credentials are correct</li>";
        echo "</ul>";
        echo "<p><small>Error: " . htmlspecialchars($e->getMessage()) . "</small></p>";
        exit;
    } else {
        die("Database connection error. Please check error logs.");
    }
} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
    die("Configuration error: " . $e->getMessage());
}

/* 
 * Now you can use this connection by accessing 
 * the global $conn variable
 * 
 * Example usage:
 * --------------
 * global $conn;
 * $stmt = $conn->query("SELECT * FROM users");
 * 
 */