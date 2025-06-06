// function toggleForm() {
//     const loginForm = document.getElementById('login-form');
//     const signupForm = document.getElementById('signup-form');
    
//     if (loginForm.style.display === 'none') {
//         loginForm.style.display = 'block';
//         signupForm.style.display = 'none';
//     } else {
//         loginForm.style.display = 'none';
//         signupForm.style.display = 'block';
//     }
// }

function toggleForm() {
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    
    if (loginForm.style.display === "none") {
        loginForm.style.display = "block";
        signupForm.style.display = "none";
    } else {
        loginForm.style.display = "none";
        signupForm.style.display = "block";
    }
}


function validateLoginForm() {
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;

    if (!email || !password) {
        alert("Please fill in both fields.");
        return false;
    }
    // Additional validation logic can go here (e.g., email format check)

    return true;
}

function validateSignupForm() {
    const name = document.getElementById('signup-name').value;
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;

    if (!name || !email || !password) {
        alert("Please fill in all fields.");
        return false;
    }
    // Additional validation logic can go here (e.g., password strength check)

    return true;
}


document.addEventListener("DOMContentLoaded", function () {
  // Attach event listeners properly
  document.querySelector(".search-icon").addEventListener("click", function () {
      searchProducts();
  });

  document.querySelector(".search-input").addEventListener("keyup", function (event) {
      if (event.key === "Enter") {
          searchProducts();
      }
  });

  function searchProducts() {
      let query = document.querySelector(".search-input").value.toLowerCase();
      let products = document.querySelectorAll(".product");
      let found = false; // Track if a match is found

      products.forEach(product => {
          let productNameElement = product.querySelector("p:first-of-type"); // Select first paragraph
          if (productNameElement) {
              let productName = productNameElement.textContent.toLowerCase();
              if (productName.includes(query)) {
                  product.style.display = "block"; // Show matching product
                  if (!found) {
                      product.scrollIntoView({ behavior: "smooth", block: "center" }); // Scroll to first match
                      found = true;
                  }
              } else {
                  product.style.display = "none"; // Hide non-matching product
              }
          }
      });

      // If no matches are found, display a message
      if (!found) {
          alert("No matching products found!");
      }
  }
});


function addToCart(productId, productName, price) {
    fetch('cart.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ productId, productName, price, quantity: 1 })
    }).then(response => response.text())
      .then(data => alert(data));
}


document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('.search-input');
    const searchButton = document.querySelector('.search-icon');
    const categorySelect = document.querySelector('.search-select');
  
    function sendSearchData(keyword, category) {
      fetch('store_search.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `keyword=${encodeURIComponent(keyword)}&category=${encodeURIComponent(category)}`
      });
    }
  
    // Trigger on button click
    searchButton.addEventListener('click', function () {
      const keyword = searchInput.value.trim();
      const category = '';
      if (keyword !== '') {
        sendSearchData(keyword, category);
      }
    });
  
    // Trigger on Enter key
    searchInput.addEventListener('keydown', function (event) {
      if (event.key === 'Enter') {
        event.preventDefault(); // prevent default form submission
        searchButton.click(); // simulate button click
      }
    });
  });



