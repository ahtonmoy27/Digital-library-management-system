@extends('layouts.app')

@section('content')
<style>
    /* Dashboard card style matching navbar */
    #admin-content .dashboard-card {
        background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        border-radius: 50%; /* perfect circle */
        width: 180px;
        height: 180px;
        box-shadow: 0 6px 15px rgba(13, 110, 253, 0.4);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: default;
    }

    #admin-content .dashboard-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 25px rgba(13, 110, 253, 0.6);
    }

    #admin-content .dashboard-card p {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0d6efd; /* bootstrap primary blue */
        margin-bottom: 0.25rem;
    }

    #admin-content .dashboard-card h5 {
        color: #0d6efd;
        font-weight: 600;
        margin-bottom: 0;
    }

    /* Center the dashboard heading consistent with container */
    .admin-heading {
        font-weight: 700;
        font-size: 2rem;
        color: #0d6efd;
        margin-bottom: 2rem;
    }
</style>

<div id="admin-content" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">Dashboard</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            {{-- Dashboard Cards --}}
            @foreach ([
                ['count' => $authors, 'label' => 'Authors Listed'],
                ['count' => $publishers, 'label' => 'Publishers Listed'],
                ['count' => $categories, 'label' => 'Categories Listed'],
                ['count' => $books, 'label' => 'Books Listed'],
                ['count' => $students, 'label' => 'Register Students'],
                ['count' => $issued_books, 'label' => 'Book Issued'],
            ] as $item)
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="dashboard-card">
                        <p>{{ $item['count'] }}</p>
                        <h5>{{ $item['label'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
