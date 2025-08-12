document.getElementById("toggleBtn").addEventListener("click", function() {
            let para = document.getElementById("togglePara");
            if (para.style.display === "none") {
                para.style.display = "block";
                this.innerText = "Hide";
            } else {
                para.style.display = "none";
                this.innerText = "Show";
            }
        });