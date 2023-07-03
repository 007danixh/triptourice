

<?php if (isset($_SESSION['message'])) {
?>
<script>
    swal({
        icon: "success",
        title: "Thank You",
        text: "<?php echo $_SESSION['message'] ?>",
        timer: 8000,
        showConfirmButton: true,
        type: 'success'
    });
</script>


<?php } unset($_SESSION['message']); ?>
