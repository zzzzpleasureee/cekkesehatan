<h1>Medical Record</h1>

<p>No RM: {{ $medicalRecord->no_rm }}</p>
<p>Date of Examination: {{ $medicalRecord->tanggal_periksa }}</p>
<p>Main Complaint: {{ $medicalRecord->keluhan_utama }}</p>
<p>Lab Results: {{ $medicalRecord->lab }}</p>
<p>Diagnosis: {{ $medicalRecord->diagnosis }}</p>
<p>Therapy: {{ $medicalRecord->terapi }}</p>

<a href="{{ route('medical_records.index') }}" class="btn btn-primary">Back</a>