$(document).ready(function() {
    // Handle login button click
    $("#login-btn").click(function() {
      var userType = $("#user-type").val();
      var loginUrl = "login.php"; // Replace with your actual login script URL
  
      // Send AJAX request to login script
      $.ajax({
        url: loginUrl,
        type: "POST",
        data: { user_type: userType },
        success: function(response) {
          // Handle successful login based on response (redirect to appropriate dashboard)
          if (response.success) {
            if (userType === "admin") {
              window.location.href = "login.php"; // Redirect to admin dashboard
            } else if (userType === "tenant") {
              window.location.href = "tenant.php"; // Redirect to tenant dashboard
            } else {
              alert("Invalid login type"); // Handle unexpected user type
            }
          } else {
            alert("Login failed! Please check your credentials."); // Handle failed login
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("AJAX Error:", textStatus, errorThrown); // Log error details for debugging
        }
      });
    });
  });
  