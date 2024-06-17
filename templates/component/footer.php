<footer class="bg-info text-white p-3 mt-5">
    <p class="text-center">Copyright &copy; Rosyid Mukti Wibowo - 2211104076</p>
</footer>

<script src="./assets/css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

<script>
    function toggleContent() {
        var content = document.getElementById("content");
        if (content.classList.contains("hidden")) {
            content.classList.remove("hidden");
            document.getElementById("toggleLink").textContent = "Sembunyikan Mendoan";
        } else {
            content.classList.add("hidden");
            document.getElementById("toggleLink").textContent = "Tampilkan Mendoan";
        }
    }
</script>

</body>

</html>