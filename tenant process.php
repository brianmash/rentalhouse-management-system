<?php

include('./db_connect.php');
// Function to retrieve tenant balance
function getTenantBalance($tenantId) {
  global $conn;
  $sql = "SELECT balance FROM tenants WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $tenantId);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row["balance"];
}

// Function to submit maintenance request
function submitMaintenanceRequest($tenantId, $requestDetails) {
  global $conn;
  $sql = "INSERT INTO maintenance_requests (tenant_id, request_details, status) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $status = "Pending"; // Initial status for new requests
  $stmt->bind_param("iss", $tenantId, $requestDetails, $status);
  $stmt->execute();
  return $stmt->affected_rows > 0; // Return true if insertion successful
}

// Function to process payment
function processPayment($tenantId, $paymentAmount) {
  global $conn;
  // Implement logic to update tenant balance and potentially record payment details
  // This might involve database transactions for data integrity

  // Example logic (replace with your actual implementation)
  $sql = "UPDATE tenants SET balance = balance - ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("di", $paymentAmount, $tenantId);
  $stmt->execute();

  return $stmt->affected_rows > 0; // Return true if update successful
}

// Handle actions based on request type
if (isset($_POST["action"])) {
  $action = $_POST["action"];

  if ($action === "get_balance") {
    $tenantId = $_POST["tenantId"]; // Assuming you have tenant ID retrieval logic
    $balance = getTenantBalance($tenantId);
    echo json_encode(array("balance" => $balance));
  } else if ($action === "submit_request") {
    $tenantId = $_POST["tenantId"]; // Assuming you have tenant ID retrieval logic
    $requestDetails = $_POST["requestDetails"];
    $success = submitMaintenanceRequest($tenantId, $requestDetails);
    echo json_encode(array("success" => $success));
  } else if ($action === "process_payment") {
    $tenantId = $_POST["tenantId"]; // Assuming you have tenant ID retrieval logic
    $paymentAmount = $_POST["paymentAmount"];
    $success = processPayment($tenantId, $paymentAmount);
    echo json_encode(array("success" => $success));
  } else {
    echo json_encode(array("error" => "Invalid action"));
  }
}

$conn->close();

