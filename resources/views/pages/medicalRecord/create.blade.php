<h1>Create Medical Record</h1>

<form method="POST" action="{{ route('medical_records.store') }}">
    @csrf

    <div class="form-group">
        <label for="no_rm">No RM</label>
        <input type="text" class="form-control" id="no_rm" name="no_rm" required>
    </div>

    <div class="form-group">
        <label for="tanggal_periksa">Date of Examination</label>
        <input type="date" class="form-control" id="tanggal_periksa" name="tanggal_periksa" required>
    </div>

    <div class="form-group">
        <label for="keluhan_utama">Main Complaint</label>
        <textarea class="form-control" id="keluhan_utama" name="keluhan_utama" required></textarea>
    </div>

    <div class="form-group">
        <label for="lab">Lab Results</label>
        <textarea class="form-control" id="lab" name="lab"></textarea>
    </div>

    <div class="form-group">
        <label for="diagnosis">Diagnosis</label>
        <textarea class="form-control" id="diagnosis" name="diagnosis" required></textarea>
    </div>

    <div class="form-group">
        <label for="terapi">Therapy</label>
        <textarea class="form-control" id="terapi" name="terapi" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>