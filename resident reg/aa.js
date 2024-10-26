<script type="text/javascript">
function formValidation() {
    // First name
    if (document.fr.firstname.value == "") {
        alert('First name is empty');
        document.fr.firstname.focus();
        return false;
    } else {
        var letters = /^[A-Za-z]+$/;
        if (!document.fr.firstname.value.match(letters)) {
            alert('This field should only contain letters');
            document.fr.firstname.focus();
            return false;
        }
        return true;
    }
}
</script>
