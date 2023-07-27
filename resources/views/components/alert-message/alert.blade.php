

<div id="alert-wrapper">
    @if (session('success'))
        <div class="alert alert-success" id="alert-message">
            {{ session('success') }}
            <div class="progress-bar" id="progress"></div>
        </div>
    @endif
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const alertMessage = $('#alert-message');
        const progressBar = $('#progress');

        if (alertMessage.length > 0) {
            alertMessage.show();
            progressBar.show();

            setTimeout(function () {
                alertMessage.hide();
                progressBar.hide();
            }, 5000);
        }
    });
</script>

