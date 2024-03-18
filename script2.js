$(document).ready(function() {

    // Get tenant balance on page load
    getTenantBalance();
  
    // Handle "Make Payment" button click
    $("#make-payment-btn").click(function() {
      $("#paymentModal").modal("show");
    });
  
    // Handle maintenance request form submission
    $("#maintenance-request-form").submit(function(event) {
      event.preventDefault(); // Prevent default form submission
  
      var requestDetails = $("#request-details").val();
  
      submitMaintenanceRequest(requestDetails);
    });
  
    // Handle payment confirmation within modal
    $("#confirm-payment-btn").click(function() {
      var paymentAmount = $("#payment-amount").val();
  
      processPayment(paymentAmount);
    });
  
    // Function to retrieve tenant balance
    function getTenantBalance() {
      $.ajax({
        url:"tenant process.php",
        method: "POST",
        data: {
          action: "get_balance",
        //   tenantId: /* Your logic to get tenant ID */,
        },
        dataType: "json",
        success: function(response) {
          if (response.balance) {
            $("#balance").text(response.balance);
          } else {
            console.error("Error retrieving balance:", response.error);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error retrieving balance:", textStatus, errorThrown);
        }
      });
    }
  
    // Function to submit maintenance request
    function submitMaintenanceRequest(requestDetails) {
      $.ajax({
        url: "tenant process.php",
        method: "POST",
        data: {
          action: "submit_request",
        //   tenantId: /* Your logic to get tenant ID */,
          requestDetails: requestDetails
        },
        dataType: "json",
        success: function(response) {
          if (response.success) {
            alert("Maintenance request submitted successfully!");
            $("#request-details").val(""); // Clear request details after submission
          } else {
            console.error("Error submitting request:", response.error);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error submitting request:", textStatus, errorThrown);
        }
      });
    }
  
    // Function to process payment
    function processPayment(paymentAmount) {
      $.ajax({
        url: "tenant process.php",
        method: "POST",
        data: {
          action: "process_payment",
        //   tenantId: /* Your logic to get tenant ID */,
          paymentAmount: paymentAmount
        },
        dataType: "json",
        success: function(response) {
          if (response.success) {
            alert("Payment processed successfully! Balance will be updated shortly.");
            $("#paymentModal").modal("hide");
            getTenantBalance(); // Refresh balance after successful payment
          } else {
            console.error("Error processing payment:", response.error);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error processing payment:", textStatus, errorThrown);
        }
      });
    }
  
  });
  