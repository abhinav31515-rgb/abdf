@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('header', 'Operations Dashboard')

@section('content')
<div class="kpi-grid">
    <article>
        <h3>Today's Bookings</h3>
        <p>{{ $stats['today_bookings'] }}</p>
    </article>
    <article>
        <h3>Active Offers</h3>
        <p>{{ $stats['active_offers'] }}</p>
    </article>
    <article>
        <h3>Occupancy</h3>
        <p>{{ $stats['occupancy'] }}</p>
    </article>
    <article>
        <h3>Average Rating</h3>
        <p>{{ $stats['average_rating'] }}/5</p>
    </article>
</div>

<div class="charts-grid">
    <div class="panel">
        <h2>Weekly Occupancy Trend</h2>
        <canvas id="occupancyChart" height="120"></canvas>
    </div>
    <div class="panel">
        <h2>Revenue (₹ Cr) Trend</h2>
        <canvas id="revenueChart" height="120"></canvas>
    </div>
</div>

<div class="panel">
    <h2>Recent Guest Enquiries</h2>
    <table>
        <thead>
        <tr>
            <th>Guest</th>
            <th>Request</th>
            <th>Channel</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recentEnquiries as $item)
            <tr>
                <td>{{ $item['guest'] }}</td>
                <td>{{ $item['request'] }}</td>
                <td>{{ $item['channel'] }}</td>
                <td><span class="status">{{ $item['status'] }}</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    const labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

    new Chart(document.getElementById('occupancyChart'), {
        type: 'line',
        data: {
            labels,
            datasets: [{
                label: 'Occupancy %',
                data: @json($occupancyTrend),
                borderColor: '#2b8a3e',
                backgroundColor: 'rgba(43,138,62,0.15)',
                fill: true,
                tension: 0.35
            }]
        }
    });

    new Chart(document.getElementById('revenueChart'), {
        type: 'bar',
        data: {
            labels,
            datasets: [{
                label: 'Revenue',
                data: @json($revenueTrend),
                backgroundColor: '#334155'
            }]
        }
    });
</script>
@endpush
