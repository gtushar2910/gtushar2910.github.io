document.getElementById("addItemBtn").addEventListener("click", function() {
            let input = document.getElementById("itemInput");
            let newItem = document.createElement("li");
            newItem.textContent = input.value;
            if (input.value.trim() !== "") {
                document.getElementById("itemList").appendChild(newItem);
                input.value = ""; // Clear input after adding
            } else {
                alert("Please enter an item.");
            }
        });