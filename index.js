document.addEventListener("DOMContentLoaded", (event) => {
    fetch(new Request("recipes.php", {method: 'GET'}))
        .then(response => {
            response.json().then(data => console.log(data))
        })
});