<script>
    function hidden_attr() {
        var alert = document.getElementById("alert");
        alert.setAttribute('hidden', true);
    }

    function refeshSessionThongbao() {
        <?php
        // echo $_SESSION['thongbao'];
        ?>
    }

    function hidden_notification() {
        setTimeout(hidden_attr, 3000);
        setTimeout(refeshSessionThongbao, 3000);
    }
</script>