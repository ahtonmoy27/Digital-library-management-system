@extends("layouts.app")

@section('content')
<style>
    #admin-content {
        padding: 3rem 0;
        background: #f8f9fa;
        min-height: 80vh;
    }
    .admin-heading {
        font-weight: 800;
        font-size: 2.5rem;
        color: #0d6efd;
        margin-bottom: 3rem;
        text-align: center;
    }

    .report-card {
        background-color: #004085; /* dark blue */
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 64, 133, 0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
        max-width: 22rem;
        cursor: pointer;
        border: none;
        display: flex;
        align-items: center;
        padding: 1.5rem 2rem;
        gap: 12px;
        text-decoration: none;
        margin-bottom: 1.5rem;
    }

    .report-card:hover {
        background-color: #003366; /* darker blue on hover */
        box-shadow: 0 10px 20px rgba(0, 51, 102, 0.8);
        transform: scale(1.05);
        text-decoration: none;
    }

    .report-icon {
        width: 30px;
        height: 30px;
        flex-shrink: 0;
    }

    .card-link-text {
        color: #ffffff;
        font-weight: 700;
        font-size: 1.3rem;
        flex-grow: 1;
    }

    /* Responsive */
    @media (max-width: 576px) {
        .report-card {
            max-width: 100%;
            justify-content: center;
            padding: 1.2rem 1rem;
        }
        .report-icon {
            display: none; /* hide icon on small screens if you want */
        }
    }
</style>

<div id="admin-content" class="container">
    <h2 class="admin-heading">Reports</h2>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('reports.date_wise') }}" class="report-card">
                {{-- <img src="/icons/date-report-icon.png" alt="Date Wise Icon" class="report-icon" /> --}}
                <span class="card-link-text">Date Wise Report</span>
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
            <a href="{{ route('reports.month_wise') }}" class="report-card">
                {{-- <img src="/icons/month-report-icon.png" alt="Monthly Wise Icon" class="report-icon" /> --}}
                <span class="card-link-text">Monthly Wise Report</span>
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
            <a href="{{ route('reports.not_returned') }}" class="report-card">
                {{-- <img src="/icons/not-returned-icon.png" alt="Not Returned Icon" class="report-icon" /> --}}
                <span class="card-link-text">Not Returned</span>
            </a>
        </div>
    </div>
</div>
@endsection
