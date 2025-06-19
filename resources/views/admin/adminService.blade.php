@extends('admin.adminLayout.adminHome')
@section('title', 'Admin Services')

@section('content')
    <div class="container pt-5 mt-5">
        <h2 class="text-center mb-5">Manage Services</h2>

        <div class="row g-4 mb-5">
            @foreach ($allServices as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0 bg-white rounded-4">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary mb-2">{{ $service->service_name }}</h5>
                            <p class="card-text text-secondary small mb-3">
                                {{ \Illuminate\Support\Str::limit($service->service_content, 100, '...') }}
                            </p>

                            <ul class="list-unstyled ps-3 text-muted small flex-grow-1">
                                @foreach (explode(',', $service->service_list) as $item)
                                    <li>• {{ trim($item) }}</li>
                                @endforeach
                            </ul>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button class="btn btn-outline-success btn-sm px-3" data-bs-toggle="modal"
                                    data-bs-target="#editModal-{{ $service->id }}">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </button>
                                <button class="btn btn-outline-danger btn-sm px-3" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal-{{ $service->id }}">
                                    <i class="bi bi-trash me-1"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--edit  Modal -->
                <div class="modal fade" id="editModal-{{ $service->id }}" tabindex="-1"
                    aria-labelledby="editModalLabel-{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" action="{{ route('admin.services.update', $service->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-content rounded-3 shadow">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit {{ $service->service_name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Service Name</label>
                                        <input type="text" name="service_name" class="form-control"
                                            value="{{ $service->service_name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Service Content</label>
                                        <textarea name="service_content" class="form-control" rows="3" required>{{ $service->service_content }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Service List (comma-separated)</label>
                                        <textarea name="service_list" class="form-control" rows="2">{{ $service->service_list }}</textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="modal fade" id="deleteModal-{{ $service->id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel-{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" action="{{ route('admin.services.delete', $service->id) }}">
                            @csrf
                            <div class="modal-content rounded-3 shadow">
                            <div class="ml-2" style="margin-left:10px;">
                                <i class="bi bi-exclamation-triangle-fill text-warning" style="font-size: 3rem;"></i>
                                <h4 class="mt-4">Are you sure you want to delete?</h4>
                                <p class="text-muted mb-4">This action is irreversible. Please confirm to proceed.</p>
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Yes,Delete</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
    <!-- Bootstrap icons (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endsection
