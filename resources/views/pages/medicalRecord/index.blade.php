<h1>Medical Records</h1>

<form method="GET" action="{{ route('medical_records.index') }}">
    <input type="text" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>No RM</th>
            <th>Date of Examination</th>
            <th>Main Complaint</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medicalRecords as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->no_rm }}</td>
                <td>{{ $record->tanggal_periksa }}</td>
                <td>{{ $record->keluhan_utama }}</td>
                <td>
                    <a href="{{ route('medical_records.show', $record->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('medical_records.edit', $record->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('medical_records.destroy', $record->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>