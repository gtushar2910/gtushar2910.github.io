 document.querySelectorAll(".colorBtn").forEach(function(btn) {
            btn.addEventListener("click", function() {
                document.body.style.backgroundColor = btn.getAttribute("data-color");
            });
        });