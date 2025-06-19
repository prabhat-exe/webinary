{{-- resources/views/admin/adminLayout/adminHome.blade.php --}}
@extends('admin.adminLayout.adminHome')
@section('title', 'Admin Home')
@section('content')
    <div class="container pt-5 mt-5">
        <h2 class="mb-4">Welcome to Admin Home</h2>


    </div>



    @foreach ($sections as $section)
        <div class="container py-4">
            <h3>{{ ucfirst($section->section) }} Section</h3>
            <h3 class="mb-3">{{ $section->title }}</h3>
            <div class="mb-4">
                {!! $section->content !!}
            </div>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $section->id }}">
                Edit Content
            </button>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="editModal-{{ $section->id }}" tabindex="-1"
            aria-labelledby="editModalLabel-{{ $section->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form method="POST" action="{{ route('admin.section.update', $section->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel-{{ $section->id }}">Edit
                                {{ ucfirst($section->section) }} Section</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            {{-- Title --}}
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $section->title }}"
                                    required>
                            </div>

                            {{-- Content --}}
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control" rows="8" required>{{ $section->content }}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    <div class="container py-4">
        <h3 class="mb-4">Project Section</h3>

        <div style="max-height: 300px; overflow-y: auto;" class="border rounded p-3 bg-white shadow-sm">
            @foreach ($allProjects as $project)
                <div class="card mb-2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fw-semibold">{{ $project->title }}</div>

                        @if ($project->homeview == 1)
                            <span class="badge bg-success d-flex align-items-center">
                                <i class="bi bi-check-circle me-1"></i> Shown on Home
                            </span>
                        @else
                            <span class="badge bg-danger d-flex align-items-center">
                                <i class="bi bi-x-circle me-1"></i> Hidden from Home
                            </span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2 mt-2"
            data-bs-toggle="modal" data-bs-target="#showallProjectsModal">
            <i class="bi bi-pencil-square"></i>
            Select Projects to Show on Home Page
        </button>
    </div>

{{-- project modal --}}
    <div class="modal fade" id="showallProjectsModal" tabindex="-1" aria-labelledby="selectProjectsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="POST" action="{{ route('admin.projects.updateHomeview') }}">
                @csrf
                @method('PUT')

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select Projects for Homepage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th>Show</th>
                                    <th>Project Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allProjects as $project)
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" name="projects[]" value="{{ $project->id }}"
                                                {{ $project->homeview == 1 ? 'checked' : '' }}>
                                        </td>
                                        <td>{{ $project->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



 <div class="container py-4">
        <h3 class="mb-4">Review Section</h3>

        <div style="max-height: 300px; overflow-y: auto;" class="border rounded p-3 bg-white shadow-sm">
            @foreach ($reviews as $review)
                <div class="card mb-2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="fw-semibold">{{ $review->name }}</div>
                        <div class="fw-semibold">{{ $review->designation }}</div>
                        @if ($review->homeview == 1)
                            <span class="badge bg-success d-flex align-items-center">
                                <i class="bi bi-check-circle me-1"></i> Shown on Home
                            </span>
                        @else
                            <span class="badge bg-danger d-flex align-items-center">
                                <i class="bi bi-x-circle me-1"></i> Hidden from Home
                            </span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2 mt-2"
            data-bs-toggle="modal" data-bs-target="#showallreviewModal">
            <i class="bi bi-pencil-square"></i>
            Select review to Show on Home Page
        </button>
    </div>
    {{-- review modal --}}
    <div class="modal fade" id="showallreviewModal" tabindex="-1" aria-labelledby="selectreviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="POST" action="{{ route('admin.reviews.updateHomeview') }}">
                @csrf
                @method('PUT')

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select reviews for Homepage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th>Show</th>
                                    <th>Client Name</th>
                                    <th>Designation</th>
                                    <th>Comment</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" name="reviews[]" value="{{ $review->id }}"
                                                {{ $review->homeview == 1 ? 'checked' : '' }}>
                                        </td>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->designation }}</td>
                                        <td>{{ $review->feedback }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





@endsection
@section('script')

@endsection
