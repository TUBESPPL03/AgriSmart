@extends('layouts.app')

@section('title', 'Plant Growth Tracking')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h3>Plant Growth Tracking</h3>
    </div>
    <div class="card-body">
        <a href="{{ route('plant_growth.create') }}" class="btn btn-success mb-3">+ Add New Plant Data</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Plant Type</th>
                    <th>Activity History</th>
                    <th>Photo</th>
                    <th>Predicted Harvest</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plants as $index => $plant)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $plant->plant_type }}</td>
                    <td>{{ $plant->activity_history }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $plant->photo) }}" alt="Plant Photo" class="img-thumbnail" width="100">
                    </td>
                    <td>{{ $plant->predicted_harvest }}</td>
                    <td>
                        <a href="{{ route('plant_growth.edit', $plant->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('plant_growth.destroy', $plant->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
