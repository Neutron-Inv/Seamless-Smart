@if ($getState())
    <img src="{{ Storage::url($getState()) }}" alt="QR Code" width="150">
    <a href="{{ url('storage/'.$getState()) }}" download="qr_code.png" class="btn btn-primary">Download QR Code</a>
@endif