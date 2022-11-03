    @if ($message = Session::get('success'))
        <br>
        <div class="alert alert-success d-flex justify-content-center" role="alert">
            {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('error'))
        <br>
        <div class="alert alert-danger d-flex justify-content-center" role="alert">
            {{ $message }}
        </div>
    @endif


    @if ($message = Session::get('warning'))
        <br>
        <div class="alert alert-warning d-flex justify-content-center" role="alert">
            {{ $message }}
        </div>
    @endif


    @if ($message = Session::get('info'))
        <br>
        <div class="alert alert-info d-flex justify-content-center" role="alert">
            {{ $message }}
        </div>
    @endif


    @if ($errors->any())
        <!-- <div class="alert alert-solid-danger alert-dismissible d-flex align-items-center" role="alert">
    <i class="bx bx-xs bx-store me-2"></i>
    Please check the form below for errors
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div> -->
    @endif
